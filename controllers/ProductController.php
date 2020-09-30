<?php


namespace app\controllers;


use app\models\Product;

class ProductController extends AppController
{
    public function actionIndex()
    {
        $products = Product::find()->with('category')->all();

        return $this->render('/products/view', compact('products'));
    }
}