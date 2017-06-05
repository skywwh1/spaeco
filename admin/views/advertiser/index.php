<?php

use common\models\ModelsUtil;
use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\search\AdvertiserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Advertisers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="nav-menu" data-menu="advertiser-index"></div>
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-body">
                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                <p>
                    <?php // Html::a('Create Advertiser', ['create'], ['class' => 'btn btn-success']) ?>
                </p>
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
//                        [
//                            'class' => 'kartik\grid\ActionColumn',
//                            'template' => '{all}',
//                            'header' => 'Action',
//                            'buttons' => [
//                                'all' => function ($url, $model, $key) {
//                                    return '<div class="dropdown">
//                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Actions
//                                        <span class="caret"></span></button>
//                                    <ul class="dropdown-menu">
//                                        <li><a data-name="crud-button" data-title="View Advertiser ' . $model->id . '" data-url="/advertiser/view?id=' . $model->id . '">View</a></li>
//                                        <li><a data-title="Update Advertiser ' . $model->id . '" href="/advertiser/update?id=' . $model->id . '">Update</a></li>
//                                    </ul>
//                                </div>';
//                                },
//                            ],
//                        ],

                        'id',
                        'email',
//                        'settlement_type',
                        [
                            'label' => 'Full Name',
                            'attribute' => 'firstname',
                        ],


                        'address',
                        [
                            'attribute' => 'type',
                            'value' => function ($model) {
                                return ModelsUtil::getAdvertiserType($model->type);
                            }
                        ],
                        'profile_complete',
//                        'created_time:datetime',
                        // 'type',
                        // 'auth_key',
                        // 'password_hash',
                        // 'password_reset_token',
                        // 'updated_at',
                        // 'email:email',
                        // 'company',
                        // 'phone1',
                        // 'phone2',
                        // 'weixin',
                        // 'qq',
                        // 'skype',
                        // 'alipay',
                        // 'country',
                        // 'city',
                        // 'address',
                        // 'lang',
                        // 'timezone',
                        // 'firstaccess',
                        // 'lastaccess',
                        // 'picture',
                        // 'confirmed',
                        // 'suspended',
                        // 'deleted',
                        // 'cc_email:email',
                        // 'traffic_source',
                        [
                            'attribute' => 'status',
                            'value' => function ($data) {
                                return ModelsUtil::getAdvertiserStatus($data->status);
                            },
                            'filter' => ModelsUtil::advertiser_status,
                        ],

                    ],
                ]); ?>
            </div>
        </div>
    </div>
</div>