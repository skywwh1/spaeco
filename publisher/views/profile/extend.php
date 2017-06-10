<?php

use kartik\file\FileInput;
use kartik\select2\Select2;
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\JsExpression;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Publisher */

$this->params['breadcrumbs'][] = ['label' => 'Publishers', 'url' => ['index']];

?>
<div id="nav-menu" data-menu="profile-index"></div>
<div class="modal fade" id="update-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">

        <div class="modal-content">
            <?php $form = ActiveForm::begin([
                'enableAjaxValidation' => true,
                'validationUrl' => '/profile/validate-extend',
            ]); ?>
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel"> Update My Profile</h4>
            </div>
            <div class="modal-body">


                <?= $form->field($model, 'verticals')->widget(Select2::classname(), [
                    'data' => \common\models\ModelsUtil::vertical,
                    'options' => ['placeholder' => 'Select Verticals ...', 'multiple' => true],
                    'pluginOptions' => [
                        'tags' => true,
                        'tokenSeparators' => [',', ' '],
                        'maximumInputLength' => 10
                    ],
                ]) ?>

                <?= $form->field($model, 'sources')->widget(Select2::classname(), [
                    'data' => \common\models\ModelsUtil::source,
                    'options' => ['placeholder' => 'Select Sources ...', 'multiple' => true],
                    'pluginOptions' => [
                        'tags' => true,
                        'tokenSeparators' => [',', ' '],
                        'maximumInputLength' => 10
                    ],
                ]) ?>

                <?= $form->field($model, 'basis')->widget(Select2::classname(), [
                    'data' => \common\models\ModelsUtil::pricing_mode,
                    'options' => ['placeholder' => 'Select model ...', 'multiple' => true],
                    'pluginOptions' => [
                        'tags' => true,
                        'tokenSeparators' => [',', ' '],
                        'maximumInputLength' => 10
                    ],
                ]) ?>

                <?=$form->field($model, 'geo')->widget(Select2::classname(), [
//                'initValueText' => $model->target_geo, // set the initial display text
                    'size' => Select2::MEDIUM,
                    'options' => [
                        'multiple' => true,
                    ],
                    'pluginOptions' => [
                        'allowClear' => true,
                        'minimumInputLength' => 1,
                        'language' => [
                            'errorLoading' => new JsExpression("function () { return 'Waiting for results...'; }"),
                        ],
                        'ajax' => [
                            'url' => Url::to(['util/geo']),
                            'dataType' => 'json',
                            'data' => new JsExpression('function(params) { return {name:params.term}; }')
                        ],
                        'escapeMarkup' => new JsExpression('function (markup) { return markup; }'),
                        'templateResult' => new JsExpression('function(campaign) { return campaign.text; }'),
                        'templateSelection' => new JsExpression('function (campaign) { return campaign.text; }'),
                    ],
                ]);

                ?>
            </div>
            <div class="modal-footer">
                <?= Html::submitButton('Update', ['class' => 'btn btn-primary']) ?>

            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>

<?php
$this->registerJsFile(
    '@web/js/update.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);
?>
