<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\search\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="nav-menu" data-menu="user-index"></div>
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-body">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php // Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
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
                    <li><a data-name="crud-button" data-title="View User ' . $model->id . '" data-url="/user/view?id=' . $model->id . '">View</a></li>
                    <li><a data-title="Update User ' . $model->id . '" href="/user/update?id=' . $model->id . '">Update</a></li>
                </ul>
            </div>';
            },
            ],
            ],

            'id',
            'parent_id',
            'username',
            'firstname',
            'lastname',
            // 'type',
            // 'auth_key',
            // 'password_hash',
            // 'password_reset_token',
            // 'created_time:datetime',
            // 'updated_time:datetime',
            // 'status',
            // 'email:email',
            // 'company',
            // 'phone1',
            // 'phone2',
            // 'weixin',
            // 'qq',
            // 'skype',
            // 'alipay',
            // 'country',
            // 'city',
            // 'address',
            // 'lang',
            // 'timezone',
            // 'firstaccess',
            // 'lastaccess',
            // 'picture',
            // 'suspended',
            // 'deleted',


        ],
    ]); ?>
            </div>
        </div>
    </div>
</div>