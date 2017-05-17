<?php

/* @var $this yii\web\View */

$this->title = 'My dashboard';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully login in</p>

        <p><a class="btn btn-lg btn-success" href="#">Get started with Superads</a></p>
    </div>

    <div class="body-content">


    </div>
</div>
<?php
//$js='alert(99);';
//$this->registerJs($js, View::POS_READY);
$this->registerJsFile('@web/js/bootstrap.min.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]);
?>