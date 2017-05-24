<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AdvEducation */

$this->title = 'Update Adv Education: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Adv Educations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div id="nav-menu" data-menu="adv-education-index"></div>
<div class="row">
    <div class="col-lg-6">
        <div class="box">
            <div class="box-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

            </div>
        </div>
    </div>
</div>
