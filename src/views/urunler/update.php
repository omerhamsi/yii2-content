<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model omerhamsi\content\models\Urunler */

$this->title = 'Update Urunler: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Urunlers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="urunler-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
