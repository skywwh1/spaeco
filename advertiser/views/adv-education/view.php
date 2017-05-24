<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\AdvEducation */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Adv Educations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adv-education-view">


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'adv_id',
            'school',
            'degree',
            'major',
            'start_time:datetime',
            'end_time:datetime',
            'grade',
            'school_activity:ntext',
            'achievement:ntext',
            'create_time:datetime',
            'update_time:datetime',
        ],
    ]) ?>

</div>
