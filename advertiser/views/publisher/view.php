<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Publisher */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Publishers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="publisher-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            'firstname',
            'lastname',
            'type',
            'auth_token',
            'auth_key',
            'password_hash',
            'password_reset_token',
            'pm',
            'om',
            'master_publisher',
            'payment_way',
            'payment_term',
            'beneficiary_name',
            'bank_country',
            'bank_name',
            'bank_address',
            'swift',
            'account_nu_iban',
            'company_address',
            'system',
            'contacts',
            'create_time:datetime',
            'update_time:datetime',
            'email:email',
            'cc_email:ntext',
            'company',
            'country',
            'city',
            'address',
            'phone1',
            'phone2',
            'wechat',
            'qq',
            'skype',
            'alipay',
            'lang',
            'timezone',
            'firstaccess',
            'lastaccess',
            'picture',
            'confirmed',
            'suspended',
            'deleted',
            'status',
            'traffic_source',
            'pricing_mode',
            'note:ntext',
            'post_back',
            'total_revenue',
            'payable',
            'paid',
            'strong_geo',
            'strong_category',
            'recommended',
            'os',
            'profile_complete',
            'approved',
            'name_card_path',
        ],
    ]) ?>

</div>
