<?php

use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = '';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>CRUD operations for:
                <p><a class="btn btn-default" href="<?= Url::toRoute('/products') ?>">Products &raquo;</a></p>
                <p><a class="btn btn-default" href="<?= Url::toRoute('/brands') ?>">Brands &raquo;</a></p>
                <p><a class="btn btn-default" href="<?= Url::toRoute('/countries') ?>">Countries &raquo;</a></p>
            </div>
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4">
            </div>
        </div>

    </div>
</div>
