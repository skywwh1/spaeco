<?php

namespace advertiser\controllers;

use common\models\AdvEducation;
use common\models\AdvExperience;
use Yii;
use common\models\Advertiser;
use advertiser\search\ProfileSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProfileController implements the CRUD actions for Advertiser model.
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
     * Lists all Advertiser models.
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
     * Displays a single Advertiser model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $experiences = $model->advExperiences;
        $advEducations = $model->advEducations;
        return $this->render('view', [
            'model' => $model,
            'experiences' => $experiences,
            'advEducations' => $advEducations,
        ]);
    }

    /**
     * Creates a new Advertiser model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Advertiser();

        if ($model->load(Yii::$app->request->post())) {
            $this->beforeSave($model);
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Advertiser model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $this->beforeUpdate($model);
        if ($model->load(Yii::$app->request->post())) {
            $this->beforeSave($model);
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }
        return $this->render('update', [
            'model' => $model,
        ]);

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
        $experiences = $model->advExperiences;

        if ($model->loadAll(Yii::$app->request->post())) {
            $this->beforeSave($model);
            if ($model->saveAll()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }
        return $this->render('update_experience', [
            'model' => $model,
            'experiences' => (empty($experiences)) ? [new AdvExperience()] : $experiences,
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
        $educations = $model->advEducations;

        if ($model->loadAll(Yii::$app->request->post())) {
            $this->beforeSave($model);
            if ($model->saveAll()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }
        return $this->render('update_education', [
            'model' => $model,
            'educations' => (empty($educations)) ? [new AdvEducation()] : $educations,
        ]);
    }

    /**
     * Deletes an existing Advertiser model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Advertiser model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Advertiser the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Advertiser::findOne($id)) !== null) {
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
