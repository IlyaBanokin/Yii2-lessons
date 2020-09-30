<?php


namespace app\controllers;


use app\models\Country;
use app\models\EntryForm;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use yii\widgets\ActiveForm;

class TestController extends AppController
{
    public function actionIndex()
    {
        $model = new EntryForm;

        if($model->load(\Yii::$app->request->post()) && $model->validate()){
            \Yii::$app->session->setFlash('success', 'Данные приняты');
            //dd($model);
            return $this->refresh();
        }

        return $this->render('/test/index', compact('model'));
    }

    public function actionView()
    {
        $countries = Country::find()
            ->where( ['like', 'name', 'ni'])
            ->all();

        return $this->render('/test/view', compact('countries'));
    }

    public function actionCreate()
    {
        $model = new Country();

        if(\Yii::$app->request->isAjax){
           $model->load(\Yii::$app->request->post());
           \Yii::$app->response->format = Response::FORMAT_JSON;
           return ActiveForm::validate($model);
        }

        if($model->load(\Yii::$app->request->post()) && $model->save()) {
            \Yii::$app->session->setFlash('success', 'Данные загружены');
            return $this->refresh();
        }

        return $this->render('/test/create', compact('model'));
    }

    public function actionUpdate()
    {
        $model = Country::findOne('AU');

        if(!$model){
            throw new NotFoundHttpException('Country Not Found');
        }

        if($model->load(\Yii::$app->request->post()) && $model->save()) {
            \Yii::$app->session->setFlash('success', 'Данные загружены');
            return $this->refresh();
        }

        return $this->render('/test/update', compact('model'));
    }
}