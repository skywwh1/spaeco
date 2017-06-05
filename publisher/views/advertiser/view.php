<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Advertiser */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Advertisers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="advertiser-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            'firstname',
            'lastname',
            'payment_term',
            'pm',
            'bd',
            'system',
            'status',
            'contacts',
            'total_revenue',
            'receivable',
            'received',
            'pricing_mode',
            'type',
            'auth_token',
            'auth_key',
            'password_hash',
            'password_reset_token',
            'create_time:datetime',
            'update_time:datetime',
            'post_parameter',
            'email:email',
            'cc_email:email',
            'company',
            'country',
            'city',
            'address',
            'phone1',
            'phone2',
            'weixin',
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
            'ip_whitelist',
            'note:ntext',
            'profile_complete',
            'approved',
            'name_card_path',
        ],
    ]) ?>

</div>
