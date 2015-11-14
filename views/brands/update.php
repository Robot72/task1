<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Brands */
/* @var $countries app\models\Countries */

$this->title = 'Изменение бренда: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Бренды', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменение';
?>
<div class="brands-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'countries' => $countries
    ]) ?>

</div>
