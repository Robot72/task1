<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Brands */
/* @var $countries app\models\Countries */

$this->title = 'Создать бренд';
$this->params['breadcrumbs'][] = ['label' => 'Бренды', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="brands-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'countries' => $countries
    ]) ?>

</div>
