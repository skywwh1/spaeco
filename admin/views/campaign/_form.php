<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Campaign */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="campaign-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'advertiser')->textInput() ?>

    <?= $form->field($model, 'campaign_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'campaign_uuid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pricing_mode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'payout_currency')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'promote_start')->textInput() ?>

    <?= $form->field($model, 'promote_end')->textInput() ?>

    <?= $form->field($model, 'effective_time')->textInput() ?>

    <?= $form->field($model, 'adv_update_time')->textInput() ?>

    <?= $form->field($model, 'device')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'platform')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'min_version')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'max_version')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'daily_cap')->textInput() ?>

    <?= $form->field($model, 'bid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'daily_budget')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_budget')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adv_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'now_payout')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'target_geo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'traffic_source')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kpi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'others')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'preview_link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'icon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'package_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'app_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'app_size')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'version')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'app_rate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'creative_link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'creative_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'creative_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'carriers')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'conversion_flow')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'recommended')->textInput() ?>

    <?= $form->field($model, 'indirect')->textInput() ?>

    <?= $form->field($model, 'epc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'avg_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tag')->textInput() ?>

    <?= $form->field($model, 'direct')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'open_type')->textInput() ?>

    <?= $form->field($model, 'subid_status')->textInput() ?>

    <?= $form->field($model, 'track_way')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'third_party')->textInput() ?>

    <?= $form->field($model, 'track_link_domain')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adv_link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_type')->textInput() ?>

    <?= $form->field($model, 'other_setting')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ip_blacklist')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'creator')->textInput() ?>

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