<?php


namespace app\controllers\admin;


use yii\web\Controller;

class TestSiteController extends Controller
{
    //public $defaultAction = 'about-this';

    public function actions()
    {
        return [
            // объявляет "error" действие с помощью названия класса
            'about-this' => 'app\components\HelloWorldAction',
        ];
    }


    public function actionIndex()
    {
        return 'Hello Worlds';
    }

    public function actionAboutThis()
    {
        return __METHOD__;
    }
}