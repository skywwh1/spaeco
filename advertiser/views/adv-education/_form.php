<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AdvEducation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="adv-education-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'adv_id')->textInput() ?>

    <?= $form->field($model, 'school')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'degree')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'major')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'start_time')->textInput() ?>

    <?= $form->field($model, 'end_time')->textInput() ?>

    <?= $form->field($model, 'grade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_activity')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'achievement')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'create_time')->textInput() ?>

    <?= $form->field($model, 'update_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
//$js='alert(99);';
//$this->registerJs($js, View::POS_READY);
$this->registerJsFile('@web/js/bootstrap.min.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]);?>