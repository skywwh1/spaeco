<?php

/* @var $this \yii\web\View */
/* @var $content string */

use admin\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap\Modal;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition sidebar-mini sidebar-collapse skin-purple-light">
<?php $this->beginBody() ?>

<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>ECO</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>S</b>uperad<b>E</b>CO</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" id="a-sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="hidden-xs"><?= Yii::$app->user->identity->username ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">

                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <?php $aa = '<a>' .
                                        Html::beginForm(['/site/logout'], 'post') .
                                        Html::submitButton(
                                            'Sign out',
                                            ['class' => 'btn btn-default btn-flat']
                                        ) .
                                        Html::endForm() . '</a>';
                                    echo $aa;
                                    ?>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                        <span class="pull-right-container">
            </span>
                    </a>
                </li>
                <!--                <li class="treeview">-->
                <!--                    <a href="#">-->
                <!--                        <i class="fa  fa-random"></i>-->
                <!--                        <span>Deliver</span>-->
                <!--                        <span class="pull-right-container">-->
                <!--                          <i class="fa fa-angle-left pull-right"></i>-->
                <!--                        </span>-->
                <!--                    </a>-->
                <!--                    <ul class="treeview-menu">-->
                <!--                        <li>-->
                <!--                            <a href="/deliver/sts" data-menu="deliver-sts">-->
                <!--                                <i class="fa fa-circle-o"></i>-->
                <!--                                STS-->
                <!--                            </a>-->
                <!--                        </li>-->
                <!--                        <li>-->
                <!--                            <a href="/deliver/index" data-menu="deliver-index">-->
                <!--                                <i class="fa fa-circle-o"></i>-->
                <!--                                Deliver List-->
                <!--                            </a>-->
                <!--                        </li>-->
                <!--                        <li>-->
                <!--                            <a href="pages/examples/login.html">-->
                <!--                                <i class="fa fa-circle-o"></i>-->
                <!--                                Test Install-->
                <!--                            </a>-->
                <!--                        </li>-->
                <!--                    </ul>-->
                <!--                </li>-->
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Campaign</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="/campaign/index" data-menu="campaign-index">
                                <i class="fa fa-circle-o"></i>
                                Campaign List
                            </a>
                        </li>
                        <li>
                            <a href="/campaign/create" data-menu="campaign-create">
                                <i class="fa fa-circle-o"></i>
                                Campaign Create
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-user"></i>
                        <span>Publisher</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="/publisher/index" data-menu="publisher-index">
                                <i class="fa fa-circle-o"></i>
                                Register List
                            </a>
                        </li>
                        <li>
                            <a href="/publisher/certifying" data-menu="publisher-certifying-index">
                                <i class="fa fa-circle-o"></i>
                                Certifying List
                            </a>
                        </li>

                        <li>
                            <a href="/publisher/certificate-index" data-menu="publisher-certificate-index">
                                <i class="fa fa-circle-o"></i>
                                Certificate List
                            </a>
                        </li>
                        <li>
                            <a href="/publisher/create" data-menu="publisher-create">
                                <i class="fa fa-circle-o"></i>
                                Create
                            </a>
                        </li>

                        <!--                        <li>-->
                        <!--                            <a href="pages/examples/profile.html">-->
                        <!--                                <i class="fa fa-circle-o"></i>-->
                        <!--                                Deliver List-->
                        <!--                            </a>-->
                        <!--                        </li>-->
                        <!--                        <li>-->
                        <!--                            <a href="pages/examples/login.html">-->
                        <!--                                <i class="fa fa-circle-o"></i>-->
                        <!--                                Login-->
                        <!--                            </a>-->
                        <!--                        </li>-->
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-user-plus"></i>
                        <span>Advertiser</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="/advertiser/index" data-menu="advertiser-index">
                                <i class="fa fa-circle-o"></i>
                                Regitser List
                            </a>
                        </li>

                        <li>
                            <a href="/advertiser/certifying" data-menu="advertiser-certifying-index">
                                <i class="fa fa-circle-o text-aqua"></i>
                                Certifying List
                            </a>
                        </li>
                        <li>
                            <a href="/advertiser/certificate-index" data-menu="advertiser-certificate-index">
                                <i class="fa fa-circle-o"></i>
                                Certificated List
                            </a>
                        </li>
                        <li>
                            <a href="/advertiser/create" data-menu="advertiser-create">
                                <i class="fa fa-circle-o"></i>
                                Create ADV
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-pie-chart"></i>
                        <span>Report</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="pages/charts/chartjs.html">
                                <i class="fa fa-circle-o"></i>
                                ChartJS
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-dollar"></i>
                        <span>Finance</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="pages/examples/invoice.html">
                                <i class="fa fa-circle"></i>
                                STS
                            </a>
                        </li>
                        <li>
                            <a href="/deliver/index">
                                <i class="fa fa-circle-o text-aqua"></i>
                                Deliver List
                            </a>
                        </li>
                        <li>
                            <a href="pages/examples/login.html">
                                <i class="fa fa-circle-o text-aqua"></i>
                                Login
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-laptop"></i>
                        <span>System</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="/user/index" data-menu="user-index">
                                <i class="fa fa-circle-o text-red"></i>
                                User List
                            </a>
                        </li>
                        <li>
                            <a href="/user/create" data-menu="user-create">
                                <i class="fa fa-circle-o text-red"></i>
                                User Create
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <?= $this->title ?>
            </h1>
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
        </section>

        <!-- Main content -->
        <section class="content">
            <?= $content ?>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Superads</b> Support
        </div>
        <strong>Copyright &copy; <?= date('Y') ?>
            <a href="#">Superads</a>
            .</strong> All rights
        reserved.
    </footer>
</div>

<?php $this->endBody() ?>
</body>
<?php
Modal::begin([
    'id' => 'index-crud-modal',
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
