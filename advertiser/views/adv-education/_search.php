<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model advertiser\search\AdvEducationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="adv-education-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'adv_id') ?>

    <?= $form->field($model, 'school') ?>

    <?= $form->field($model, 'degree') ?>

    <?= $form->field($model, 'major') ?>

    <?php // echo $form->field($model, 'start_time') ?>

    <?php // echo $form->field($model, 'end_time') ?>

    <?php // echo $form->field($model, 'grade') ?>

    <?php // echo $form->field($model, 'school_activity') ?>

    <?php // echo $form->field($model, 'achievement') ?>

    <?php // echo $form->field($model, 'create_time') ?>

    <?php // echo $form->field($model, 'update_time') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
