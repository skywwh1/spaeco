<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel advertiser\search\ProfileSearch */
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


        ],
    ]); ?>
            </div>
        </div>
    </div>
</div>