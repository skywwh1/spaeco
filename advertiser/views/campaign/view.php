<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Campaign */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Campaigns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campaign-view">


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'campaign_name',
            'campaign_uuid',
            'pricing_mode',
            'payout_currency',
            'promote_start:datetime',
            'promote_end:datetime',
            'effective_time:datetime',
            'adv_update_time:datetime',
            'device',
            'platform',
            'min_version',
            'max_version',
            'daily_cap',
            'bid',
            'daily_budget',
            'total_budget',
            'adv_price',
            'now_payout',
            'target_geo',
            'traffic_source',
            'kpi:ntext',
            'note:ntext',
            'others:ntext',
            'preview_link',
            'icon',
            'package_name',
            'app_name',
            'app_size',
            'category',
            'version',
            'app_rate',
            'description:ntext',
            'creative_link',
            'creative_type',
            'creative_description',
            'carriers',
            'conversion_flow',
            'recommended',
            'indirect',
            'epc',
            'avg_price',
            'tag',
            'direct',
            'status',
            'open_type',
            'subid_status',
            'track_way',
            'third_party',
            'track_link_domain',
            'adv_link',
            'link_type',
            'other_setting',
            'ip_blacklist',
            'create_time:datetime',
            'update_time:datetime',
        ],
    ]) ?>

</div>
