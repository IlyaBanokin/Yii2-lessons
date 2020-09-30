<?php use yii\helpers\Html;
use yii\widgets\ActiveForm; ?>
<div class="col-md-12">

    <?php if(\Yii::$app->session->hasFlash('success')):?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?=\Yii::$app->session->getFlash('success'); ?>
        </div>
    <?php endif; ?>

    <?php if(\Yii::$app->session->hasFlash('error')):?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?=\Yii::$app->session->getFlash('error'); ?>
        </div>
    <?php endif; ?>


    <h1>Обновление записи</h1>

    <?php

    $form = ActiveForm::begin([
        'id' => 'my-form',
        'options' => [
            'class' => 'form-horizontal',
        ]
    ]); ?>

    <?php /** @var \app\models\Country $model */ ?>

    <?= $form->field($model, 'name') ?>
    <?= $form->field($model, 'population') ?>
    <?= $form->field($model, 'status')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>