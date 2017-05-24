<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Campaign */

$this->title = 'Create Campaign';
$this->params['breadcrumbs'][] = ['label' => 'Campaigns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="nav-menu" data-menu="campaign-create"></div>

<?= $this->render('_form', [
    'model' => $model,
]) ?>
