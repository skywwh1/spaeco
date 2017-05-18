<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-lg-8 col-md-offset-2">
        <h1 >Advertiser</h1>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Sign Up Info</h3>
            </div>
            <div class="panel-body">
            <?php $form = ActiveForm::begin(['id' => 'form-signup'
                ]); ?>

                <?= $form->field($model, 'firstname')->textInput(['autofocus' => true,'placeholder'=>'Full Name'])->label(false) ?>
                <?= $form->field($model, 'company')->textInput(['placeholder'=>'Company'])->label(false) ?>
                <?= $form->field($model, 'address')->textInput(['placeholder'=>'Address'])->label(false) ?>

                <?= $form->field($model, 'email')->textInput(['placeholder'=>'Email'])->label(false) ?>

                <?= $form->field($model, 'username')->textInput(['placeholder'=>'User Name'])->label(false) ?>
                <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Password'])->label(false)?>
                <?= $form->field($model, 'confirm')->passwordInput(['placeholder'=>'Confirm Password'])->label(false) ?>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                    </div>

                    <!-- /.col -->
                    <div class="col-xs-8" style="text-align: right">
                        <br>
                        <p>
                            <?= Html::a('Home', '@frontendUrl') ?><br>
                            <?= Html::a('Login', ['/site/login']) ?><br>
                            <?= Html::a('Forget password', ['/site/forget']) ?><br>
                        </p>
                    </div>
                    <!-- /.col -->
                </div>

            <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
</div>