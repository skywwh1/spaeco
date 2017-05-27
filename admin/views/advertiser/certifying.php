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
<div id="nav-menu" data-menu="advertiser-certifying-index"></div>
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
                                        <li><a data-name="crud-button" data-title="View Advertiser ' . $model->id . '" data-url="/advertiser/view?id=' . $model->id . '">View</a></li>
                                        <li><a data-title="Update Advertiser ' . $model->id . '" href="/advertiser/update?id=' . $model->id . '">Update</a></li>
                                    </ul>
                                </div>';
                                },
                            ],
                        ],

                        'id',
                        'username',
//                        'settlement_type',
                        [
                            'attribute' => 'payment_term',
                            'value' => function ($data) {
                                return ModelsUtil::getPaymentTerm($data->payment_term);
                            },
                            'filter' => ModelsUtil::payment_term,
                        ],
                        [
                            'attribute' => 'bd',
                            'value' => 'bd0.username',
                            'filter' => false,
                        ],

                        'system',
                        [
                            'attribute' => 'status',
                            'value' => function ($data) {
                                return ModelsUtil::getAdvertiserStatus($data->status);
                            },
                            'filter' => ModelsUtil::advertiser_status,
                        ],
                        // 'contacts',
                        'pricing_mode',
                        'auth_token',
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
                        'note:ntext',


                    ],
                ]); ?>
            </div>
        </div>
    </div>
</div>