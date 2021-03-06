<?php

use common\models\ModelsUtil;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Advertiser */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Advertisers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="advertiser-view">


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            'auth_token',
//            'team',
            //'settlement_type',
            [
                'attribute' => 'payment_term',
                'value' => function ($model) {
                    return ModelsUtil::getPaymentTerm($model->payment_term);
                },
            ],
            // 'bd',
            [
                'attribute' => 'bd',
//                'value' => $model->bd0->username,
            ],
            'system',
//                            [
//                                'attribute' => 'system',
//                                'value' => ModelsUtil::getValue(ModelsUtil::system, $model->system),
//                            ],
            //'status',
            [
                'attribute' => 'status',
                'value' => ModelsUtil::getValue(ModelsUtil::advertiser_status, $model->status),
            ],
            'contacts',
            'pricing_mode',
            'post_parameter',
            'email:email',
            'cc_email:email',
            'company',
            'phone1',
            'skype',
            'country',
            'city',
            'firstaccess',
            'lastaccess',
            'picture',
            // 'suspended',
            [
                'attribute' => 'suspended',
                'value' => ModelsUtil::getValue(ModelsUtil::user_status, $model->suspended),
            ],
            [
                'attribute' => 'deleted',
                'value' => ModelsUtil::getValue(ModelsUtil::user_status, $model->deleted),
            ],
            //'deleted',
            'note:ntext',
            //'created_time:datetime',
            [
                'attribute' => 'timezone',
                'value' => function ($model) {
                    return ModelsUtil::getTimezone($model->timezone);
                }
            ],
            [
                'attribute' => 'create_time',
                'format' => ['date', 'php:Y-m-d H:i:s']
            ],
            //'updated_time:datetime',
            [
                'attribute' => 'update_time',
                'format' => ['date', 'php:Y-m-d H:i:s']
            ],
        ],
    ]) ?>

</div>
