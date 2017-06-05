<?php

use kartik\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel publisher\search\AdvertiserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Advertisers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="advertiser-index">

    <h1><?= Html::encode($this->title) ?></h1>
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
            'username',
            'firstname',
            'lastname',
            'payment_term',
            // 'pm',
            // 'bd',
            // 'system',
            // 'status',
            // 'contacts',
            // 'total_revenue',
            // 'receivable',
            // 'received',
            // 'pricing_mode',
            // 'type',
            // 'auth_token',
            // 'auth_key',
            // 'password_hash',
            // 'password_reset_token',
            // 'create_time:datetime',
            // 'update_time:datetime',
            // 'post_parameter',
            // 'email:email',
            // 'cc_email:email',
            // 'company',
            // 'country',
            // 'city',
            // 'address',
            // 'phone1',
            // 'phone2',
            // 'weixin',
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
            // 'ip_whitelist',
            // 'note:ntext',
            // 'profile_complete',
            // 'approved',
            // 'name_card_path',

        ],
    ]); ?>
</div>
