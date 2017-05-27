<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\search\PublisherSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $title string */

$this->title = $title;
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="nav-menu" data-menu="publisher-index"></div>
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-body">
                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                <p>
                    <?php // Html::a('Create Publisher', ['create'], ['class' => 'btn btn-success']) ?>
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
                    <li><a data-name="crud-button" data-title="View Publisher ' . $model->id . '" data-url="/publisher/view?id=' . $model->id . '">View</a></li>
                    <li><a data-title="Update Publisher ' . $model->id . '" href="/publisher/update?id=' . $model->id . '">Update</a></li>
                </ul>
            </div>';
                                },
                            ],
                        ],

                        'id',
                        'email:email',
                        [
                            'label' => 'Full Name',
                            'attribute' => 'firstname',
                        ],
                        'company',
                        'address',
                        'type',
                        'status',
                        // 'auth_token',
                        // 'auth_key',
                        // 'password_hash',
                        // 'password_reset_token',
                        // 'pm',
                        // 'om',
                        // 'master_publisher',
                        // 'payment_way',
                        // 'payment_term',
                        // 'beneficiary_name',
                        // 'bank_country',
                        // 'bank_name',
                        // 'bank_address',
                        // 'swift',
                        // 'account_nu_iban',
                        // 'company_address',
                        // 'system',
                        // 'contacts',
                        // 'created_time:datetime',
                        // 'updated_time:datetime',
                        // 'email:email',
                        // 'cc_email:ntext',
                        // 'company',
                        // 'country',
                        // 'city',
                        // 'address',
                        // 'phone1',
                        // 'phone2',
                        // 'wechat',
                        // 'qq',
                        // 'skype',
                        // 'alipay',
                        // 'lang',
                        // 'timezone',
                        // 'firstaccess',
                        // 'lastaccess',
                        // 'picture',
                        // 'confirmed',
                        // 'suspended',
                        // 'deleted',
                        // 'status',
                        // 'traffic_source',
                        // 'pricing_mode',
                        // 'note:ntext',
                        // 'post_back',
                        // 'total_revenue',
                        // 'payable',
                        // 'paid',
                        // 'strong_geo',
                        // 'strong_category',
                        // 'recommended',
                        // 'os',


                    ],
                ]); ?>
            </div>
        </div>
    </div>
</div>