<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Advertiser */

$this->title = 'Update Advertiser: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Advertisers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div id="nav-menu" data-menu="profile-index"></div>


<?= $this->render('_form', [
    'model' => $model,
]) ?>


