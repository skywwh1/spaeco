<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel publisher\search\ProfileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Publishers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="publisher-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Publisher', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'firstname',
            'lastname',
            'type',
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
