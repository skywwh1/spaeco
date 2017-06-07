<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\captcha\Captcha;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h1 class="login-panel">Publisher</h1>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Please Sign In</h3>
            </div>
            <div class="panel-body">
                <?PHP $form = ActiveForm::begin([
                    'id' => 'login-form',
                ]);
                ?>
                <div class="form-group field-advloginform-type">

                    <?= Html::dropDownList('type', 'b', ['a' => 'Advertiser', 'b' => 'Publisher'], ['class' => 'form-control','id'=>'logintype']) ?>
                </div>
                <?= $form->field($model, 'email')->input('text', ['class' => 'form-control', 'placeholder' => 'Email', 'autofocus' => true])->label(false) ?>
                <!--    <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
                <?= $form->field($model, 'password')->input('password', ['class' => 'form-control', 'placeholder' => 'Password'])->label(false) ?>
                <!--    <span class="glyphicon glyphicon-lock form-control-feedback"></span> -->

                <?= $form->field($model, 'verifyCode')->label(false)->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-5">{image}</div><div class="col-lg-7">{input}</div></div>',
                ]) ?>

                <div class="row">
                    <div class="col-xs-4">

                    </div>
                    <div class="col-xs-4">
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
                <div class="row">
                    <div class="col-xs-4">
                    </div>

                    <!-- /.col -->
                    <div class="col-xs-8" style="text-align: right">
                        <br>
                        <p>
                            <?= Html::a('Home', '@frontendUrl') ?><br>
                            <?= Html::a('Sign Up', ['/site/signup']) ?><br>
                            <?= Html::a('Forget password', ['/site/forget']) ?><br>
                        </p>
                    </div>
                    <!-- /.col -->
                </div>

                <?php ActiveForm::end() ?>
            </div>
        </div>
    </div>
</div>
<?php
$this->registerJsFile('@web/js/login.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]); ?>


