<?php

use kartik\file\FileInput;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Advertiser */
/* @var $experiences common\models\AdvExperience[] */
/* @var $advEducations common\models\AdvEducation[] */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Advertisers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
unset($this->assetManager->getBundle('advertiser\assets\AppAsset')->js[0]);
?>
<div id="nav-menu" data-menu="profile-index"></div>
<div class="row">
    <h1></h1>

    <div class="col-lg-8">
        <div class="well">
            <h4>Profile completed:</h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar"  aria-valuenow="<?= $model->profile_complete ?>" aria-valuemin="0" aria-valuemax="100" style="width:  <?= $model->profile_complete ?>%;">
                    <?= $model->profile_complete ?>
                </div>
            </div>

        </div>

    </div>
</div>
<div class="row">
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
//                        'system',
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
                if (!empty($experiences)) {
                    foreach ($experiences as $experience) {
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
                if (!empty($advEducations)) {
                    foreach ($advEducations as $advEducation) {
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

<div class="row">
    <h1></h1>
    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Name Card
                <div class="pull-right">
                    <div class="btn-group">
                        <?php
                        Modal::begin([
                            'header' => 'Upload Name Card',
                            'toggleButton' => [
                                'label' => 'Upload Name Card', 'class' => 'btn btn-primary btn-xs'
                            ],
                        ]);
                        echo FileInput::widget([
                            'name' => 'imageFile',
                            'language' => 'en',
                            'options' => ['multiple' => false],
                            'pluginOptions' => ['previewFileType' => 'any', 'uploadUrl' => Url::to(['upload'])]
                        ]);
                        Modal::end();
                        ?>
                    </div>
                </div>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <img src="/util/show-name-card?path=<?= $model->name_card_path ?>">
            </div>
        </div>
    </div>
</div>