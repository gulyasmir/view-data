<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?php   echo $form->field($model, 'name') ?>

    <?= $form->field($model, 'code') ?>

    <?php // $form->field($model, 'weight') ?>

    <?php // $form->field($model, 'quantity_msk') ?>

    <?php // $form->field($model, 'quantity_piter') ?>

    <?php // echo $form->field($model, 'quantity_camara') ?>

    <?php // echo $form->field($model, 'quantity_caratov') ?>

    <?php // echo $form->field($model, 'quantity_kazan') ?>

    <?php // echo $form->field($model, 'quantity_novosib') ?>

    <?php // echo $form->field($model, 'quantity_chelyabinsk') ?>

    <?php // echo $form->field($model, 'quantity_dl_chelyabinsk') ?>

    <?php // echo $form->field($model, 'price_msk') ?>

    <?php // echo $form->field($model, 'price_piter') ?>

    <?php // echo $form->field($model, 'price_camara') ?>

    <?php // echo $form->field($model, 'price_caratov') ?>

    <?php // echo $form->field($model, 'price_kazan') ?>

    <?php // echo $form->field($model, 'price_novosib') ?>

    <?php // echo $form->field($model, 'price_chelyabinsk') ?>

    <?php // echo $form->field($model, 'price_dl_chelyabinsk') ?>

    <?php // echo $form->field($model, 'usage_product') ?>



    <div class="form-group">
        <?= Html::submitButton('Искать', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Отмена', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
