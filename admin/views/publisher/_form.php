<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Publisher */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="publisher-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->textInput() ?>

    <?= $form->field($model, 'auth_token')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'auth_key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password_hash')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password_reset_token')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pm')->textInput() ?>

    <?= $form->field($model, 'om')->textInput() ?>

    <?= $form->field($model, 'master_publisher')->textInput() ?>

    <?= $form->field($model, 'payment_way')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'payment_term')->textInput() ?>

    <?= $form->field($model, 'beneficiary_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bank_country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bank_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bank_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'swift')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'account_nu_iban')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'system')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contacts')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'updated_time')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cc_email')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'company')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wechat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qq')->textInput() ?>

    <?= $form->field($model, 'skype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alipay')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'timezone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'firstaccess')->textInput() ?>

    <?= $form->field($model, 'lastaccess')->textInput() ?>

    <?= $form->field($model, 'picture')->textInput() ?>

    <?= $form->field($model, 'confirmed')->textInput() ?>

    <?= $form->field($model, 'suspended')->textInput() ?>

    <?= $form->field($model, 'deleted')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'traffic_source')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pricing_mode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'post_back')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_revenue')->textInput() ?>

    <?= $form->field($model, 'payable')->textInput() ?>

    <?= $form->field($model, 'paid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'strong_geo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'strong_category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'recommended')->textInput() ?>

    <?= $form->field($model, 'os')->textInput() ?>

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