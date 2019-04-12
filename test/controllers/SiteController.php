<?php
namespace app\controllers;

use alexdin\restlog\RestRequestHelper;
use yii\web\Controller;

class SiteController extends Controller
{

    public function actionIndex()
    {
        return  \Yii::error(json_decode(RestRequestHelper::getRequestBody(),true));
    }
}