<?php
namespace Moorexa\Framework\Models;

use Closure;
use Lightroom\Packager\Moorexa\{
    MVC\Model, Interfaces\ModelInterface
};
use Lightroom\Database\LightQuery;
use Boame\Support\{UploadToStorage, QueryHelper};
use function Lightroom\Database\Functions\{map, db};
use function Lightroom\Requests\Functions\{headers};
/**
 * ArticleProcessor model class auto generated.
 *
 *@package Article ArticleProcessor Model
 *@author Amadi Ifeanyi <amadiify.com>
 **/

class ArticleProcessor extends Model
{
    use LightQuery, UploadToStorage, QueryHelper;

    /**
     * @var array $defaultResponse
     */
    private $defaultResponse = [];

    /**
     * @method ModelInterface onModelInit
     * @param ModelInterface $model
     * @param Closure $next
     * @return void
     */
    public function onModelInit(ModelInterface $model, Closure $next) : void 
    {
        // call closure
        $next();
    }

    /**
     * @method ArticleProcessor getAll
     * @return void
     * 
     * Get all articles
     */
    public function getAll() : void
    {
        // make query
        $articles = db('articles')->if(true, function($query)
        {
            // check for accountid
            if (headers()->has('x-account-id')) return $query->get('accountid = ?', headers()->get('x-account-id'));

            // just fetch
            $query->get();

            // add order
            $query->orderBy('articleid', 'desc');

        })->if(true, function($query){ $this->addFetchQueryLimits($query); })->go();

        // fetch results
        if ($articles->rowCount() > 0) app('response')->success(['articles' => array_map(function($article)
        {
            // add date
            $this->addDateString($article);

            // return object
            return $this->decodeTextAndAddFullName($article);

        }, $articles->fetchAll(FETCH_OBJ))]);

        // no result found
        app('response')->error('No article uploaded.');
    }

    /**
     * @method ArticleProcessor getView
     * @param int $articleId
     * @return void 
     * 
     * Fetch article by its ID
     */
    public function getView($articleId)
    {
        // filter param
        $param = app('filter')->safeParam(['number' => $articleId]);

        // are we good ?
        if ($param->isOk()) :

            // check if article exists
            $article = map(db('articles')->get('articleid = ?', $articleId));

            // get record
            if ($article->rows > 0) :
            
                // get the result
                $result = $article->row();

                // @var bool $addViews
                $canAdd = headers()->get('x-request-platform') == 'mobile' ? true : false;

                // can we update total views??
                if ($canAdd):

                    // Update view count
                    $views = intval($result->total_views) + 1;

                    // update article
                    $article->update(['total_views' => $views]);

                endif;

                // add date
                $this->addDateString($result);

                // show result
                app('response')->success(array_merge(['article' => $this->decodeTextAndAddFullName($result)], $this->defaultResponse));

            endif;

            // no article
            app('response')->error('No article with this ID found');

        endif;

        // has error
        app('filter')->errors($param);
    }

    /**
     * @method ArticleProcessor postCreate
     * @return void
     * 
     * Create an article
     */
    public function postCreate() : void
    {
        // allow html
        env_set('bootstrap/filter-input', false);

        // apply filter
        $data = filter('POST', app('filter')->get('article'));

        // are we good ?
        if ($data->isOk()) :

            // set the table
            $this->setTable('articles');

            // check if article hasn't been created before
            if ($this->rows('article_title = ?', $data->article_title) == 0) :

                // exceptImage
                $exceptImage = $data->except('article_image');

                // build data
                $record = [
                    'article_cover_image'   => $this->uploadFile($data->article_image, $exceptImage),
                    'article_title'         => $data->article_title,
                    'article_text'          => base64_encode($data->article_text),
                    'total_views'           => 0,
                    'date_created'          => time(),
                    'accountid'             => $data->accountid
                ];

                // can we create
                if ($this->add($record)) app('response')->success('Your article has been submitted successfully.');

            endif;

            // article exists
            app('response')->error('Sorry! This article exists. Please change the caption');

        endif;

        // handle error
        app('filter')->errors($data);
    } 
    
    /**
     * @method ArticleProcessor postEdit
     * @param int $articleId
     * @return void
     */
    public function postEdit($articleId) : void 
    {
        // validate id
        $data = app('filter')->safeParam(['number' => $articleId]);

        // are we good
        if ($data->isOk()) :

            // check if article exists
            $article = map(db('articles')->get('articleid = ?', $articleId));

            // are we good ?
            if ($article->rows > 0) :

                // allow html
                env_set('bootstrap/filter-input', false);

                // apply filter
                $data = filter('POST', app('filter')->get('articleEdit', $article->article_cover_image));

                // we good ?
                if ($data->isOk()) :

                    // file upload data
                    $uploadData = [$data->article_title, $data->article_text];

                    // build update
                    $update = [
                        'article_title'         => $data->article_title,
                        'article_text'          => base64_encode($data->article_text),
                        'article_cover_image'   => ($data->article_image['name'] === $article->article_cover_image) ? $article->article_cover_image :           $this->uploadFile($data->article_image, $uploadData)
                    ];

                    // run update
                    if ($article->update($update)->ok) :

                        // push to default response
                        $this->defaultResponse['message'] = 'Article has been updated successfully';

                        // load message with updated article
                        $this->getView($articleId);

                    endif;

                    // failed
                    app('response')->error('Failed to update article. Try again later!');

                endif;

            else:

                // not found
                app('response')->error('Article requested for, does not exists.');

            endif;

        endif;

        // handle error
        app('filter')->errors($data);
    }

    /**
     * @method ArticleProcessor deleteArticle
     * @param int $articleId
     * @return void
     */
    public function deleteArticle($articleId) : void 
    {
        // validate id
        $data = app('filter')->safeParam(['number' => $articleId]);

        // are we good
        if ($data->isOk()) :

            // check if article exists
            $article = map(db('articles')->get('articleid = ?', $articleId));

            // are we good ?
            if ($article->rows > 0) :

                // try to remove from storage
                $path = HOME . '../uploads/' . $article->article_cover_image;

                // if it exists then delete
                if (file_exists($path)) unlink($path);

                // run delete
                if ($article->pop()) app('response')->success('Article has been deleted successfully.');

            endif;
            
            // not found
            app('response')->error('The article you are trying to delete does not exists');

        endif;

        // handle error
        app('filter')->errors($data);
    }

    /**
     * @method ArticleProcessor decodeTextAndAddFullName
     * @param object $article
     * @return object
     */
    private function decodeTextAndAddFullName(object $article) : object
    {
        // decode text
        $article->article_text = base64_decode($article->article_text);

        // who submitted it
        $account = db('accounts')->get('accountid = ?', $article->accountid)->go();

        // submitted by ..
        $article->submittedby = '';

        // add info
        if ($account->rowCount() > 0) :

            // get record
            $account = $account->fetch(FETCH_OBJ);

            // add fullname
            $article->submittedby = ucfirst($account->firstname) . ' ' . ucfirst($account->lastname);

        endif;

        // return article
        return $article;
    }
}