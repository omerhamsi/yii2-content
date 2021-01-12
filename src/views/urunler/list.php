<?php
use yii\helpers\Html;
?>
<div>
    <h1> <?= Html::encode($model->isim) ?></h1>
    <h3> Ürün Fiyatı=<?= Html::encode($model->fiyat) ?></h3>
    <p> <?= Html::a('Ürün Yorumları',['comment', 'id' => $model->id],['class'=>'btn btn-danger']) ?></p>
</div>
