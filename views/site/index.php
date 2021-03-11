<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'Результаты';
?>
<div class="site-index">
    <h1> Тут представлены результаты парсинга файлов XML </h1>
    <div class="block">
          <?= Html::a('Смотреть', ['product/index', 'id' => $id], ['class' =>'btn btn-primary']) ?>
    </div>
</div>
