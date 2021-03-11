<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Товары';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить товар', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'code',
            'weight',
           // 'quantity_msk',
           // 'quantity_piter',
            //'quantity_camara',
            //'quantity_caratov',
            //'quantity_kazan',
            //'quantity_novosib',
            //'quantity_chelyabinsk',
            //'quantity_dl_chelyabinsk',
            //'price_msk',
            //'price_piter',
            //'price_camara',
            //'price_caratov',
            //'price_kazan',
            //'price_novosib',
            //'price_chelyabinsk',
            //'price_dl_chelyabinsk',
            //'usage_product:ntext',


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
