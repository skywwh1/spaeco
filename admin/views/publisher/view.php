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
            'email:email',
            'cc_email:ntext',
            'company',
            'country',
            'city',
            'address',
            'phone1',
            'wechat',
            'qq',
            'skype',
            'alipay',
            'lang',
            'timezone',
            'firstaccess',
            'lastaccess',
            'status',
            'traffic_source',
            'pricing_mode',
            'note:ntext',
            'strong_geo',
            'strong_category',
            'os',
        ],
    ]) ?>

</div>
