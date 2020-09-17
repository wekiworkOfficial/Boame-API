<?php
namespace Boame\Screen;

/**
 * @method Screen Response
 * @author Amadi Ifeanyi <amadiify.com>
 */
class Response
{
    /**
     * @method Response error
     * @param mixed $data
     * @return void 
     */
    public function error($data) : void 
    {
        // print data
        app('screen')->render($this->add_message($data, 'error'));
    }

    /**
     * @method Response success
     * @param mixed $data
     * @return void 
     */
    public function success($data) : void 
    {
        // print data
        app('screen')->render($this->add_message($data, 'success'));
    }

    /**
     * @method Response warning
     * @param mixed $data
     * @return void 
     */
    public function warning($data) : void 
    {
        // print data
        app('screen')->render($this->add_message($data, 'warning'));
    }

    /**
     * @method Response info
     * @param mixed $data
     * @return void 
     */
    public function info($data) : void 
    {
        // print data
        app('screen')->render($this->add_message($data, 'info'));
    }

    /**
     * 
     * @method Response add_message
     * @param mixed $data 
     * @param string $type
     * @return array
     */
    private function add_message($data, string $type) : array 
    {
        // add message
        switch (gettype($data)) :

            // string 
            case 'string':
                $data = ['message' => $data, 'status' => $type];
            break;

            // array
            case 'array':
                $data['status'] = $type;
            break;

            // object
            case 'object':
                $data->status = $type;
                // make an array
                $data = func()->toArray($data);
            break;

        endswitch;

        // return data
        return $data;
    }
}