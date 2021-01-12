<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model omerhamsi\content\models\Urunler */

$this->title = 'Create Urunler';
$this->params['breadcrumbs'][] = ['label' => 'Urunlers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="urunler-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
