<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel advertiser\search\CampaignSearch */
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
                    
                    <li><a data-title="Update Campaign ' . $model->id . '" href="/campaign/update?id=' . $model->id . '">Edit</a></li>
                    <li><a data-title="Update Campaign ' . $model->id . '" href="/campaign/update?id=' . $model->id . '">Pause/Active</a></li>
                </ul>
            </div>';
                                },
                            ],
                        ],

                        'campaign_name',
                        [
                            'attribute' => 'status',
                            'value' => function ($model) {
                                return \common\models\ModelsUtil::getCampaignStatus($model->status);
                            }

                        ],
                        'publisher',
                        'total_budget',
                        'daily_budget',
                        'bid',
                        'clicks',
                        'installs',
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