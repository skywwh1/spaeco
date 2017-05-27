<?php

namespace advertiser\controllers;

use common\models\AdvEducation;
use common\models\AdvExperience;
use common\models\UploadForm;
use Imagine\Image\Box;
use Imagine\Image\ImageInterface;
use Yii;
use common\models\Advertiser;
use advertiser\search\ProfileSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

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
            if ($model->save()) {
                $this->updateExperience($model);
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
            if ($model->save()) {
                $this->updateEducation($model);
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }
        return $this->render('update_education', [
            'model' => $model,
            'educations' => (empty($educations)) ? [new AdvEducation()] : $educations,
        ]);
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

    /**
     * @param Advertiser $model
     */
    private function beforeSave(&$model)
    {
    }

    private function beforeUpdate(&$model)
    {

    }

    public function actionUpload()
    {
        $model = new UploadForm();

        if (Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstancesByName('imageFile')[0];
            $path = $model->singleUpload();

            if ($path) {
                $adv = Advertiser::findIdentity(Yii::$app->user->id);
                $newPath = Yii::getAlias('@files') . '/adv_name_card_' . $adv->id . '.jpg';
                $imagine = new \Imagine\Imagick\Imagine();
                $imagine->open($path)->save($newPath);
                $adv->name_card_path = $newPath;
                $adv->setProfileComplete();
                $adv->save();
                return $this->redirect(Yii::$app->request->referrer);
            } else {
                var_dump($model->getErrors());
            }
        }
    }

    /**
     * @param Advertiser $model
     */
    private function updateExperience($model)
    {
        $new = $model->advExperiences;
        $old = $model->getAdvExperiences()->all();
        if (!empty($old) && !empty($old)) {
            foreach ($old as $itemOld) {
                $exist = false;
                foreach ($new as $itemNew) {
                    if (!($itemNew->isNewRecord) && ($itemNew->id == $itemOld->id)) {
                        $exist = true;
                    }
                }
                if (!$exist) {
                    $itemOld->delete();
                }
            }
        }
        if (empty($new)) {
            AdvExperience::deleteAll(['adv_id' => $model->id]);
        } else {
            foreach ($new as $itemNew) {
                $itemNew->adv_id = $model->id;
                $itemNew->save();
            }
        }
    }

    /**
     * @param Advertiser $model
     */
    private function updateEducation($model)
    {
        $new = $model->advEducations;
        $old = $model->getAdvEducations()->all();
        if (!empty($old) && !empty($old)) {
            foreach ($old as $itemOld) {
                $exist = false;
                foreach ($new as $itemNew) {
                    if (!($itemNew->isNewRecord) && ($itemNew->id == $itemOld->id)) {
                        $exist = true;
                    }
                }
                if (!$exist) {
                    $itemOld->delete();
                }
            }
        }
        if (empty($new)) {
            AdvEducation::deleteAll(['adv_id' => $model->id]);
        } else {
            foreach ($new as $itemNew) {
                $itemNew->adv_id = $model->id;
                $itemNew->save();
            }
        }
    }
}
