<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Campaign */
/* @var $form yii\widgets\ActiveForm */
?>
<?php $form = ActiveForm::begin([
    'options' => [
        'class' => 'form-horizontal',
    ],
    'fieldConfig' => [
        'template' => "{label}<div class='col-lg-9'>{input}\n{hint}\n{error}</div>",
        'labelOptions' => [
            'class' => 'control-label col-lg-3',
        ],
    ]
]); ?>
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Create Campaign</h3>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Campaign Info & Tracking
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">


                    <?= $form->field($model, 'campaign_name')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'preview_link')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'adv_link')->textInput(['maxlength' => true])->label('Tracking URL') ?>
                </div>
                <!-- .panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Targeting
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <?= $form->field($model, 'target_geo')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'platform')->textInput(['maxlength' => true]) ?>
                </div>
                <!-- .panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Targeting
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">

                    <?= $form->field($model, 'pricing_mode')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'bid')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'total_budget')->textInput() ?>
                    <?= $form->field($model, 'daily_budget')->textInput() ?>
                    <?= $form->field($model, 'promote_start')->textInput() ?>
                    <?= $form->field($model, 'promote_end')->textInput() ?>


                </div>
                <!-- .panel-body -->
                <div class="panel-footer">
                    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

                </div>
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
    </div>
<?php ActiveForm::end(); ?>

<?php
//$js='alert(99);';
//$this->registerJs($js, View::POS_READY);
$this->registerJsFile('@web/js/bootstrap.min.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]); ?>