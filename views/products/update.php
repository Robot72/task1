<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Products */
/* @var $brands app\models\Brands */

$this->title = 'Изменение продукта: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Продукты', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменение';
?>
<div class="products-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'brands' => $brands,
    ]) ?>

</div>
