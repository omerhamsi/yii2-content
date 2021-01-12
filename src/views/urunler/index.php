<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
/* @var $this yii\web\View */
/* @var $searchModel omerhamsi\content\models\UrunlerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ÜRÜNLER';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="urunler-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Urunler', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView'=>'list',
        'separator'=>"<hr/>",
        'itemOptions'=>['class'=>'well']
    ]); ?>


</div>
