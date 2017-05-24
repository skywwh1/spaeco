<?php

use common\models\ModelsUtil;
use common\models\PriceModel;
use common\models\System;
use kartik\typeahead\Typeahead;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Advertiser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="advertiser-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true])->label('Full Name') ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'company')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
<?php
//$js='alert(99);';
//$this->registerJs($js, View::POS_READY);
$this->registerJsFile('@web/js/bootstrap.min.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]);
?>