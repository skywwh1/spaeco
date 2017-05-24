<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel advertiser\search\AdvExperienceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Adv Experiences';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="nav-menu" data-menu="adv-experience-index"></div>
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-body">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php // Html::a('Create Adv Experience', ['create'], ['class' => 'btn btn-success']) ?>
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
                    <li><a data-name="crud-button" data-title="View Adv Experience ' . $model->id . '" data-url="/adv-experience/view?id=' . $model->id . '">View</a></li>
                    <li><a data-title="Update Adv Experience ' . $model->id . '" href="/adv-experience/update?id=' . $model->id . '">Update</a></li>
                </ul>
            </div>';
            },
            ],
            ],

            'id',
            'adv_id',
            'title',
            'company',
            'address',
            // 'start_time:datetime',
            // 'end_time:datetime',
            // 'content:ntext',
            // 'create_time:datetime',
            // 'update_time:datetime',


        ],
    ]); ?>
            </div>
        </div>
    </div>
</div>