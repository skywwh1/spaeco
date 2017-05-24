<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel advertiser\search\AdvEducationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Adv Educations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="nav-menu" data-menu="adv-education-index"></div>
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-body">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php // Html::a('Create Adv Education', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
            'class' => 'kartik\grid\ActionColumn',
            'template' => '{all}',
            'header' => 'Action',
            'buttons' => [
            'all' => function ($url, $model, $key) {
            return '<div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Actions
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a data-name="crud-button" data-title="View Adv Education ' . $model->id . '" data-url="/adv-education/view?id=' . $model->id . '">View</a></li>
                    <li><a data-title="Update Adv Education ' . $model->id . '" href="/adv-education/update?id=' . $model->id . '">Update</a></li>
                </ul>
            </div>';
            },
            ],
            ],

            'id',
            'adv_id',
            'school',
            'degree',
            'major',
            // 'start_time:datetime',
            // 'end_time:datetime',
            // 'grade',
            // 'school_activity:ntext',
            // 'achievement:ntext',
            // 'create_time:datetime',
            // 'update_time:datetime',


        ],
    ]); ?>
            </div>
        </div>
    </div>
</div>