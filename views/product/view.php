<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Product */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Товары', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'code',
            'weight',
            'quantity_msk',
            'quantity_piter',
            'quantity_camara',
            'quantity_caratov',
            'quantity_kazan',
            'quantity_novosib',
            'quantity_chelyabinsk',
            'quantity_dl_chelyabinsk',
            'price_msk',
            'price_piter',
            'price_camara',
            'price_caratov',
            'price_kazan',
            'price_novosib',
            'price_chelyabinsk',
            'price_dl_chelyabinsk',
            'usage_product:ntext',
            'name',
        ],
    ]) ?>

</div>
