<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Products */
/* @var $brands app\models\Brands */

$this->title = 'Создать продукт';
$this->params['breadcrumbs'][] = ['label' => 'Продукты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'brands' => $brands,
    ]) ?>

</div>
