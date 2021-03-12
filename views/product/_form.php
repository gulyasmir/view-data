<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'weight')->textInput() ?>

    <?= $form->field($model, 'quantity_msk')->textInput() ?>

    <?= $form->field($model, 'quantity_piter')->textInput() ?>

    <?= $form->field($model, 'quantity_camara')->textInput() ?>

    <?= $form->field($model, 'quantity_caratov')->textInput() ?>

    <?= $form->field($model, 'quantity_kazan')->textInput() ?>

    <?= $form->field($model, 'quantity_novosib')->textInput() ?>

    <?= $form->field($model, 'quantity_chelyabinsk')->textInput() ?>

    <?= $form->field($model, 'quantity_dl_chelyabinsk')->textInput() ?>

    <?= $form->field($model, 'price_msk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price_piter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price_camara')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price_caratov')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price_kazan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price_novosib')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price_chelyabinsk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price_dl_chelyabinsk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usage_product')->textarea(['rows' => 6]) ?>


    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
