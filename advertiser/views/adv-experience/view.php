<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\AdvExperience */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Adv Experiences', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adv-experience-view">


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'adv_id',
            'title',
            'company',
            'address',
            'start_time:datetime',
            'end_time:datetime',
            'content:ntext',
            'create_time:datetime',
            'update_time:datetime',
        ],
    ]) ?>

</div>
