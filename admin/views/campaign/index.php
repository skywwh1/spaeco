<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\search\CampaignSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Campaigns';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="nav-menu" data-menu="campaign-index"></div>
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-body">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php // Html::a('Create Campaign', ['create'], ['class' => 'btn btn-success']) ?>
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
                    <li><a data-name="crud-button" data-title="View Campaign ' . $model->id . '" data-url="/campaign/view?id=' . $model->id . '">View</a></li>
                    <li><a data-title="Update Campaign ' . $model->id . '" href="/campaign/update?id=' . $model->id . '">Update</a></li>
                </ul>
            </div>';
            },
            ],
            ],

            'id',
            'advertiser',
            'campaign_name',
            'campaign_uuid',
            'pricing_mode',
            // 'payout_currency',
            // 'promote_start',
            // 'promote_end',
            // 'effective_time:datetime',
            // 'adv_update_time:datetime',
            // 'device',
            // 'platform',
            // 'min_version',
            // 'max_version',
            // 'daily_cap',
            // 'daily_budget',
            // 'adv_price',
            // 'now_payout',
            // 'target_geo',
            // 'traffic_source',
            // 'kpi:ntext',
            // 'note:ntext',
            // 'others:ntext',
            // 'preview_link',
            // 'icon',
            // 'package_name',
            // 'app_name',
            // 'app_size',
            // 'category',
            // 'version',
            // 'app_rate',
            // 'description:ntext',
            // 'creative_link',
            // 'creative_type',
            // 'creative_description',
            // 'carriers',
            // 'conversion_flow',
            // 'recommended',
            // 'indirect',
            // 'epc',
            // 'avg_price',
            // 'tag',
            // 'direct',
            // 'status',
            // 'open_type',
            // 'subid_status',
            // 'track_way',
            // 'third_party',
            // 'track_link_domain',
            // 'adv_link',
            // 'link_type',
            // 'other_setting',
            // 'ip_blacklist',
            // 'creator',
            // 'create_time:datetime',
            // 'update_time:datetime',


        ],
    ]); ?>
            </div>
        </div>
    </div>
</div>