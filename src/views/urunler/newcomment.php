<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model omerhamsi\content\models\Urunler */
/* @var $form yii\widgets\ActiveForm */
$this->title = 'YORUM EKLE';
$this->params['breadcrumbs'][] = ['label' => 'Urunlers', 'url' => ['index']];
?>
<div class="new-comment">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model,'yorumlar')->textarea(['maxlength'=>true])?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>