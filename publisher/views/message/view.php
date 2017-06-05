<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Message */
/* @var $chats common\models\Message[] */
/* @var $content common\models\MessageContent */

$this->title = 999;
$this->params['breadcrumbs'][] = ['label' => 'Messages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1></h1>
<div class="message-view">

    <div class="chat-panel panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-comments fa-fw"></i> Chat
            <div class="btn-group pull-right">
                <a href="#">
                    <i class="fa fa-refresh fa-fw"></i> Refresh
                </a>
            </div>
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <ul class="chat">
                <?php
                if (!empty($chats)) {
                    $chats = array_reverse($chats);
                    foreach ($chats as $item) {
                        if ($item->receive_id == $model->send_id) {
                            ?>
                            <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle"/>
                                    </span>
                                <div class="chat-body clearfix">
                                    <div class="header">
                                        <small class=" text-muted">
                                            <i class="fa fa-clock-o fa-fw"></i> <?= date('Y-m-d h:i:s', $item->create_time) ?>
                                        </small>
                                        <strong class="primary-font"><?= \common\models\Publisher::findOne($model->send_id)->username ?></strong>
                                    </div>
                                    <p>
                                        <?= $item->messageContent->content ?>
                                    </p>
                                </div>
                            </li>
                            <?php
                        } else {
                            ?>
                            <li class="right clearfix">
                                                  <span class="chat-img pull-right">
                                                      <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle"/>
                                                  </span>
                                <div class="chat-body clearfix">
                                    <div class="header">
                                        <small class=" text-muted">
                                            <i class="fa fa-clock-o fa-fw"></i> <?= date('Y-m-d h:i:s', $item->create_time) ?>
                                        </small>
                                        <strong class="pull-right primary-font">Me</strong>
                                    </div>
                                    <p>
                                        <?= $item->messageContent->content ?>
                                    </p>
                                </div>
                            </li>
                            <?php
                        }
                    }
                }
                ?>
            </ul>
        </div>
        <!-- /.panel-body -->
        <div class="panel-footer">
            <?php $form = ActiveForm::begin(['action' => 'create']); ?>

            <?= $form->field($model, 'send_id')->hiddenInput()->label(false) ?>

            <?= $form->field($model, 'receive_id')->hiddenInput()->label(false) ?>

            <?= $form->field($content, 'content')->textInput()->label(false) ?>

            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Send' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
        <!-- /.panel-footer -->
    </div>
    <!-- /.panel .chat-panel -->
</div>
