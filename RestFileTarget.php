<?php


namespace alexdin\restlog;


use yii\log\FileTarget;

class RestFileTarget extends FileTarget
{

    public function getContextMessage() : string
    {
        $string =  parent::getContextMessage();


        return $string;
    }
}