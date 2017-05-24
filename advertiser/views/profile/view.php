<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Advertiser */
/* @var $experiences common\models\AdvExperience[] */
/* @var $advEducations common\models\AdvEducation[] */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Advertisers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="nav-menu" data-menu="profile-index"></div>

<div class="row">
    <h1></h1>
    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                My Profile
                <div class="pull-right">
                    <div class="btn-group">
                        <a class="btn btn-default btn-xs" href="/profile/update?id=<?= Yii::$app->user->id ?>">Update</a>
                    </div>
                </div>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        [
                            'label' => 'Username',
                            'attribute' => 'username',
                        ],
                        'firstname',
                        'lastname',
                        'system',
                        'contacts',
                        'pricing_mode',
                        'email:email',
                        'cc_email:email',
                        'company',
                        'country',
                        'city',
                        'address',
                        'phone1',
                    ],
                ]) ?>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <h1></h1>
    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Experience
                <div class="pull-right">
                    <div class="btn-group">
                        <a class="btn btn-success btn-xs" href="/profile/update-experience?id=<?= Yii::$app->user->id ?>">Update</a>
                    </div>
                </div>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <?php
                if(!empty($experiences)){
                    foreach ($experiences as $experience){
                       echo DetailView::widget([
                            'model' => $experience,
                           'attributes' => [
                               'title',
                               'company',
                               'address',
                               'start_time:datetime',
                               'end_time:datetime',
                               'content:ntext',
                           ],
                        ]);
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <h1></h1>
    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Education
                <div class="pull-right">
                    <div class="btn-group">
                        <a class="btn btn-success btn-xs" href="/profile/update-education?id=<?= Yii::$app->user->id ?>">Update</a>
                    </div>
                </div>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <?php
                if(!empty($advEducations)){
                    foreach ($advEducations as $advEducation){
                        echo DetailView::widget([
                            'model' => $advEducation,
                            'attributes' => [
                                'school',
                                'degree',
                                'major',
                                'start_time:datetime',
                                'end_time:datetime',
                                'grade',
                                'school_activity:ntext',
                                'achievement:ntext',
                            ],
                        ]);
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>