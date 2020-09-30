<?php
use yii\widgets\ActiveForm;
use \yii\helpers\Html;
?>
<div class="col-md-12">
    <h2>Страница с формой</h2>

    <?php \yii\widgets\Pjax::begin() ?>

    <?php if(\Yii::$app->session->hasFlash('success')):?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?=\Yii::$app->session->getFlash('success'); ?>
        </div>
    <?php endif; ?>


    <?php $form = ActiveForm::begin([
            'id' => 'my-form',
            'options' => [
                'class' => 'form-horizontal',
                'data-pjax' => true,
            ]
    ]); ?>

    <?= $form->field($model, 'name') ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'topic') ?>
    <?= $form->field($model, 'text')->textarea(['rows' => '7']) ?>

    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    <?php \yii\widgets\Pjax::end(); ?>
</div>