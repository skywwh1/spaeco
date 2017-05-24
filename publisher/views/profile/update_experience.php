<?php

use wbraganca\dynamicform\DynamicFormWidget;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $experiences common\models\AdvExperience[] */
/* @var $model common\models\Advertiser */
/* @var $form yii\widgets\ActiveForm */
?>
<div id="nav-menu" data-menu="profile-index"></div>

<div class="adv-experience-form">

    <?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>
    <?= $form->field($model, "id")->hiddenInput()->label(false) ?>
    <h1></h1>
    <?php DynamicFormWidget::begin([
        'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
        'widgetBody' => '.container-items', // required: css class selector
        'widgetItem' => '.item', // required: css class
        'limit' => 4, // the maximum times, an element can be cloned (default 999)
        'min' => 1, // 0 or 1 (default 1)
        'insertButton' => '.add-item', // css class
        'deleteButton' => '.remove-item', // css class
        'model' => $experiences[0],
        'formId' => 'dynamic-form',
        'formFields' => [
            'full_name',
            'address_line1',
            'address_line2',
            'city',
            'state',
            'postal_code',
        ],
    ]); ?>

    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-envelope"></i> Experiences
            <button type="button" class="pull-right add-item btn btn-success btn-xs"><i class="fa fa-plus"></i> Add Experience</button>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">

            <div class="container-items"><!-- widgetContainer -->
                <?php foreach ($experiences as $i => $modelAddress): ?>
                    <div class="item panel panel-default"><!-- widgetBody -->
                        <div class="panel-heading">
                            <h3 class="panel-title pull-left">Experience</h3>
                            <div class="pull-right">
                                <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-body">
                            <?php
                            // necessary for update action.
                            if (!$modelAddress->isNewRecord) {
                                echo Html::activeHiddenInput($modelAddress, "[{$i}]id");
                            }
                            ?>

                            <?= $form->field($modelAddress, "[{$i}]title")->textInput(['maxlength' => true]) ?>
                            <div class="row">
                                <div class="col-sm-6">
                                    <?= $form->field($modelAddress, "[{$i}]company")->textInput(['maxlength' => true]) ?>
                                </div>
                                <div class="col-sm-6">
                                    <?= $form->field($modelAddress, "[{$i}]address")->textInput(['maxlength' => true]) ?>
                                </div>
                            </div><!-- .row -->
                            <div class="row">
                                <div class="col-sm-4">
                                    <?= $form->field($modelAddress, "[{$i}]start_time")->textInput(['maxlength' => true]) ?>
                                </div>
                                <div class="col-sm-4">
                                    <?= $form->field($modelAddress, "[{$i}]end_time")->textInput(['maxlength' => true]) ?>
                                </div>
                                <div class="col-sm-4">
                                    <?= $form->field($modelAddress, "[{$i}]content")->textInput(['maxlength' => true]) ?>
                                </div>
                            </div><!-- .row -->
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <?php DynamicFormWidget::end(); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>


