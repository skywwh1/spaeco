<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Campaign */

$this->title = 'Edit Campaign: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Campaigns', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div id="nav-menu" data-menu="campaign-index"></div>
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

            </div>
        </div>
    </div>
</div>
