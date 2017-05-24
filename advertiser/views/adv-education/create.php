<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\AdvEducation */

$this->title = 'Create Adv Education';
$this->params['breadcrumbs'][] = ['label' => 'Adv Educations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="nav-menu" data-menu="adv-education-create"></div>
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
