<?php


namespace alexdin\restlog;

use Yii;


class RestRequestHelper
{
    public static function getRequestMethod() : string
    {
            return Yii::$app->request->getMethod();
    }

    public static function getRequestBody()
    {
        return Yii::$app->request->getRawBody();
    }
}