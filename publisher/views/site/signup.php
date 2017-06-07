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
        <h1 >Publisher</h1>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Sign Up Info</h3>
            </div>
            <div class="panel-body">
            <?php $form = ActiveForm::begin(['id' => 'form-signup',
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

                <?= $form->field($model, 'firstname')->textInput(['autofocus' => true,'placeholder'=>'Full Name'])?>
                <?= $form->field($model, 'company')->textInput(['placeholder'=>'Company']) ?>
                <?= $form->field($model, 'address')->textInput(['placeholder'=>'Address']) ?>

                <?= $form->field($model, 'email')->textInput(['placeholder'=>'Email']) ?>

                <?= $form->field($model, 'username')->textInput(['placeholder'=>'User Name']) ?>
                <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Password'])?>
                <?= $form->field($model, 'confirm')->passwordInput(['placeholder'=>'Confirm Password']) ?>

                <div class="row">
                    <div class="col-lg-offset-3 col-lg-9">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                    </div>
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
                        </p>
                    </div>
                    <!-- /.col -->
                </div>

            <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
</div>