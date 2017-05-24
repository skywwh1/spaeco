<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AdvExperience */

$this->title = 'Update Adv Experience: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Adv Experiences', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div id="nav-menu" data-menu="adv-experience-index"></div>
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
