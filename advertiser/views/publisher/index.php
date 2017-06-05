<?php

use kartik\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel advertiser\search\PublisherSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Publishers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="nav-menu" data-menu="publisher-index"></div>

<div class="publisher-index">

    <h3><?= Html::encode($this->title) ?></h3>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

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
                    <li><a data-name="crud-button" data-title="View Campaign ' . $model->id . '" data-url="/publisher/view?id=' . $model->id . '">View</a></li>
                    <li><a data-title="Update Campaign ' . $model->id . '" href="/message/view?id=' . $model->id . '">Send message</a></li>
                </ul>
            </div>';
                    },
                ],
            ],

            'firstname',
            'lastname',
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
            // 'create_time:datetime',
            // 'update_time:datetime',
            // 'email:email',
            // 'cc_email:ntext',
             'company',
            // 'country',
            // 'city',
             'address',
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
            // 'profile_complete',
            // 'approved',
            // 'name_card_path',

        ],
    ]); ?>
</div>
