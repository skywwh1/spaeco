<?php

/* @var $this \yii\web\View */
/* @var $content string */

use advertiser\assets\AppAsset;
use common\models\Message;
use yii\bootstrap\Modal;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title>Super ADS</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Superad ECO Advertiser</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-messages">
                    <?php
                    $message = Message::findUnread(Yii::$app->user->id);
                    if (!empty($message)) {
                        foreach ($message as $item) {
                            ?>
                            <li>
                                <a href="<?=\yii\helpers\Url::to(['/message/view?id='.$item->send_id])?>">
                                    <div>
                                        <strong><?= \common\models\Publisher::findOne($item->send_id)->username ?></strong></strong>
                                        <span class="pull-right text-muted">
                                        <em><?= date('Y-m-d h:i:s', $item->create_time) ?></em>
                                    </span>
                                    </div>
                                    <div> <?= $item->messageContent->content ?></div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <?php
                        }
                    }
                    ?>
                </ul>
                <!-- /.dropdown-messages -->
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    Welcome <?= Yii::$app->user->identity->username ?> <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <!--                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                                        </li>
                                        <li class="divider"></li>
                    -->
                    <li>
                        <?php
                        echo Html::beginForm(['/site/logout'], 'post', ['id' => 'logout-form']);
                        echo Html::endForm();
                        ?>
                        <?php
                        echo Html::beginTag("a", ['href' => '#', 'onclick' => 'document.getElementById("logout-form").submit();']);
                        echo Html::beginTag("i", ['class' => 'fa fa-sign-out fa-fw']);
                        echo Html::endTag("i");
                        echo 'Logout (' . Yii::$app->user->identity->username . ')';
                        //echo " Logout";
                        echo Html::endTag("a");
                        ?>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="/site/index"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-files-o fa-fw"></i> Campaigns<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <?= Html::a('My Campaigns', ['campaign/index'], ['data-menu' => "campaign-index"]) ?>
                            </li>

                            <li>
                                <?= Html::a('Create Campaign', ['campaign/create'], ['data-menu' => "campaign-create"]) ?>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-user fa-fw"></i> Publisher<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <?= Html::a('Publisher List', ['publisher/index'], ['data-menu' => "publisher-index"]) ?>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                    <!--                    <li>-->
                    <!--                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Reports<span class="fa arrow"></span></a>-->
                    <!--                        <ul class="nav nav-second-level">-->
                    <!--                            <li>-->
                    <!--                            </li>-->
                    <!--                            <li>-->
                    <!--                            </li>-->
                    <!--                            <li>-->
                    <!--                            </li>-->
                    <!--                        </ul>-->
                    <!--                    </li>-->

                    <li>
                        <a href="#"><i class="fa fa-user fa-fw"></i> Account<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/account/payment" data-menu="channel-payment">Wallet</a>
                            </li>
                            <li>
                                <a href="/account/payment" data-menu="channel-payment">Transactions</a>
                            </li>
                            <li>
                                <a href="/profile/view?id=<?= Yii::$app->user->id ?>" data-menu="profile-index">My Profile</a>
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i> Help Center<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/support/api" data-menu="channel-api">API</a>
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>
    <div id="page-wrapper">
        <div class="row">
            <?= $content ?>
        </div>

    </div>
</div>

<?php $this->endBody() ?>
</body>
<?php
Modal::begin([
    'id' => 'index-crud-modal',
    'size' => 'modal-lg',
    'clientOptions' => [
        'backdrop' => 'static',
        'keyboard' => false,
    ],
]);
echo '<div id="crud-detail-content"></div>';
Modal::end();
?>
</html>
<?php $this->endPage() ?>
