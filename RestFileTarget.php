<?php


namespace alexdin\restlog;


use yii\helpers\VarDumper;
use yii\log\FileTarget;

class RestFileTarget extends FileTarget
{
    /**
     * @var array $restMethods
     *
     * That variable have list of methods for logging. When you send non standard request (put,patch,delete).
     *  if your request have method in this list, your body request data is logged too.
     */
    public $restMethods = [
        'PUT',
        'PATCH',
        'DELETE'
    ];

    /**
     * Extends Target class function add functionality for logging
     * request body data of $restMethods type requests
     * @return string
     */
    public function getContextMessage() : string
    {
        $string =  parent::getContextMessage();

        $method = RestRequestHelper::getRequestMethod();

        if(in_array($method,$this->restMethods) && in_array($method,$this->logVars)) {
            $string .=  "\n\n \${$method} = " . VarDumper::dumpAsString(RestRequestHelper::getRequestBody());
        }

        return $string;
    }
}