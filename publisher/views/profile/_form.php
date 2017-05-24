<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Publisher */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row">
    <h1></h1>
    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Update My Profile
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">

                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'cc_email')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'company')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'phone1')->textInput(['maxlength' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
</div>
