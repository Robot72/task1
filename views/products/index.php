<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\DataColumn;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchProducts */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Продукты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать продукт', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            //Имя бренда
            [
                'class' => DataColumn::className(),
                'attribute' => 'nameBrand',
                'filter' => Html::activeInput('text', $searchModel, 'nameBrand', ['class' => 'form-control']),
            ],
            
            'model',
            [
                'class' => DataColumn::className(),
                'attribute' => 'made_year',
                'format' => ['date', 'Y'],
                'filter' => false,
            ],
            'power',
            // 'price',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
