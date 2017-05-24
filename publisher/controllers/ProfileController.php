<?php

namespace publisher\controllers;

use common\models\PubEducation;
use common\models\PubExperience;
use Yii;
use common\models\Publisher;
use publisher\search\ProfileSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProfileController implements the CRUD actions for Publisher model.
 */
class ProfileController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Publisher models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProfileSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Publisher model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $experiences = $model->pubExperiences;
        $advEducations = $model->pubEducations;
        return $this->render('view', [
            'model' => $model,
            'experiences' => $experiences,
            'advEducations' => $advEducations,
        ]);
    }

    /**
     * Creates a new Publisher model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Publisher();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Publisher model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing AdvExperience model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdateExperience($id)
    {
        $model = $this->findModel($id);
        $experiences = $model->pubExperiences;

        if ($model->loadAll(Yii::$app->request->post())) {
            $this->beforeSave($model);
            if ($model->saveAll()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }
        return $this->render('update_experience', [
            'model' => $model,
            'experiences' => (empty($experiences)) ? [new PubExperience()] : $experiences,
        ]);
    }

    /**
     * Updates an existing AdvExperience model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdateEducation($id)
    {
        $model = $this->findModel($id);
        $educations = $model->pubEducations;

        if ($model->loadAll(Yii::$app->request->post())) {
            $this->beforeSave($model);
            if ($model->saveAll()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }
        return $this->render('update_education', [
            'model' => $model,
            'educations' => (empty($educations)) ? [new PubEducation()] : $educations,
        ]);
    }

    /**
     * Finds the Publisher model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Publisher the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Publisher::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    private function beforeSave(&$model)
    {

    }

    private function beforeUpdate(&$model)
    {

    }
}
