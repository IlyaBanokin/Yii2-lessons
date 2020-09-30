<?php


namespace app\controllers;


use app\models\Category;

class CategoryController extends AppController
{
    public function actionIndex()
    {
        $categories = Category::find()->all();

        return $this->render('/category/index', compact('categories'));
    }

    public function actionView($id = null)
    {
        $category = Category::findOne($id);

        return $this->render('/category/view', compact('category'));
    }
}