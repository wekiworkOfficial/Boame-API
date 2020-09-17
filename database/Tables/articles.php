<?php

/**
 * @package Database Table Articles
 * @author Amadi ifeanyi <amadiify.com>
 * 
 * This class provides an handler for Database table Articles, it can work with any database system,
 * it creates a table, drops a table, alters a table structure and does more. 
 * with the assist manager you can run migration and do more with this package.
 */
class Articles
{
    // connection identifier
    public $connectionIdentifier = '';


    // create table structure
    public function up($schema)
    {
        $schema->increment('articleid');
        $schema->string('article_title');
        $schema->longtext('article_text');
        $schema->bigint('accountid');
        $schema->bigint('total_views');
        $schema->string('date_created');
        $schema->string('article_cover_image');
        // and more.. 
    }

    // drop table
    public function down($drop, $record)
    {
        // $record carries table rows if exists.
        // execute drop table command
        $drop();
    }

    // options
    public function option($option)
    {
        $option->rename('articles'); // rename table
        $option->engine('innoDB'); // set table engine
        $option->collation('utf8_general_ci'); // set collation
    }

    // promise during migration
    public function promise($status)
    {
        if ($status == 'waiting' || $status == 'complete')
        {
            // do some cool stuffs.
            // $this->table => for ORM operations to this table.
        }
    }
}