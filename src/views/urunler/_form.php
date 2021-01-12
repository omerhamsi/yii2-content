<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model omerhamsi\content\models\Urunler */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="urunler-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'isim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fiyat')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
