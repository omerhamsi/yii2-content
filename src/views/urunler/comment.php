<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii\widgets\DetailView;
/* @var $this yii\web\View */
/* @var $searchModel omerhamsi\content\models\UrunlerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ÜRÜN YORUMLARI';
$this->params['breadcrumbs'][] = ['label' => 'Urunlers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="urunler-index">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'isim',
            'fiyat'
        ],
    ]) ?>
    <?php

    ?>
    <?php foreach ($model->yorumlars as $yorumlar){
        echo $yorumlar->yorumlar;
        echo "\t\t\t";
        echo Html::a('Yorumu SİL', ['sil', 'id' => $yorumlar->id,'modelid'=>$model->id], ['class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],]);
        echo "<br>";
        echo "<br>";
    }?>

    <p>
        <?= Html::a('Yorum ekle', ['ekleme', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>
</div>



