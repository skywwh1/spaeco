<?php

use kartik\date\DatePicker;
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
            <h3 class="page-header"><?= $this->title ?></h3>
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
                    Select Publisher
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <?= $form->field($model, 'target_geo')->dropDownList(\common\models\ModelsUtil::geography) ?>
                    <div id="geo-div">

                        <div class="form-group field-campaign-target_geo has-success">
                            <label class="control-label col-lg-3" for="campaign-target_geo"></label>
                            <div class="col-lg-9"><input id="campaign-target_geo" class="form-control" name="Campaign[target_geo]" type="text">

                                <div class="help-block"></div>
                            </div>
                        </div>
                    </div>

                    <?= $form->field($model, 'platform')->dropDownList(\common\models\ModelsUtil::platform_new) ?>
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
                    Budget & Schedule
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">

                    <?= $form->field($model, 'pricing_mode')->dropDownList(\common\models\ModelsUtil::pricing_mode_new)->label('Model') ?>
                    <?= $form->field($model, 'bid')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'total_budget')->textInput() ?>
                    <?= $form->field($model, 'daily_budget')->textInput() ?>
                    <div class="form-group field-campaign-promote_start">
                        <label class="control-label col-lg-3" for="campaign-promote_start">Promote Start</label>
                        <div class="col-lg-9">
                            <?php
                            echo DatePicker::widget([
                                'name' => 'Campaign[promote_start]',
                                'type' => DatePicker::TYPE_INPUT,
                                'value' => isset($model->promote_start) ? date("Y-m-d", $model->promote_start) : Yii::$app->formatter->asDate('now', 'php:Y-m-d'),
                                'pluginOptions' => [
                                    'autoclose' => true,
                                    'format' => 'yyyy-mm-dd'
                                ]
                            ]);
                            ?>

                            <div class="help-block"></div>
                        </div>
                    </div>
                    <div class="form-group field-campaign-promote_end has-success">
                        <label class="control-label col-lg-3" for="campaign-promote_end">Promote End</label>
                        <div class="col-lg-9">
                            <?php
                            echo DatePicker::widget([
                                'name' => 'Campaign[promote_end]',
                                'type' => DatePicker::TYPE_INPUT,
                                'value' => isset($model->promote_end) ? date("Y-m-d", $model->promote_start) : '',
                                'pluginOptions' => [
                                    'autoclose' => true,
                                    'format' => 'yyyy-mm-dd'
                                ]
                            ]);
                            ?>

                            <div class="help-block"></div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Select Publisher
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="form-group field-campaign-publisher">
                        <label class="control-label col-lg-3" for="campaign-publisher">Publisher</label>
                        <div class="col-lg-9">
                            <select id="campaign-publisher" class="form-control" name="Campaign[publisher]">
                                <option value="SuperADS">SuperADS</option>
                                <option value="Facebook">Facebook</option>
                                <option value="Google Adwards">Google Adwards</option>
                                <option value="Twitter">Twitter</option>
                                <option value="Instagram">Instagram</option>
                                <option value="0">Others</option>
                            </select>

                            <div class="help-block"></div>
                        </div>
                    </div>
                    <div id="publisher-div">

                        <div class="form-group field-campaign-publisher has-success">
                            <label class="control-label col-lg-3" for="campaign-publisher"></label>
                            <div class="col-lg-9">
                                <input id="campaign-publisher" class="form-control" name="Campaign[publisher]" type="text">

                                <div class="help-block"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- .panel-body -->
                <div class="panel-footer">
                    <?php if ($model->isNewRecord) {

                        ?>
                        <?= Html::submitButton('Save and draft', ['class' => 'btn btn-primary']) ?>
                        <button type="button" class="btn btn-success">Cancel</button>
                        <?= Html::submitButton('Continue', ['class' => 'btn btn-primary']) ?>
                        <?php
                    } else {
                        ?>
                        <?= Html::submitButton('Update', ['class' => 'btn btn-primary']) ?>
                        <?php
                    }
                    ?>
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
$this->registerJsFile('@web/js/campaign.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]); ?>