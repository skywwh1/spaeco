<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\AdvExperience */

$this->title = 'Create Adv Experience';
$this->params['breadcrumbs'][] = ['label' => 'Adv Experiences', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="nav-menu" data-menu="adv-experience-create"></div>
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
