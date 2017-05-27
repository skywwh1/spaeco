<?php

namespace advertiser\controllers;

use common\models\AdvEducation;
use common\models\AdvExperience;
use common\models\UploadForm;
use Imagine\Image\Box;
use Imagine\Image\ImageInterface;
use Imagine\Imagick\Imagine;
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
class UtilController extends Controller
{
    public function actionShowNameCard($path)
    {
        $imagine = new   Imagine();

//        var_dump(dirname(dirname(__DIR__)) . '/advertiser/image.jpg');
//        die();
        echo $imagine->open($path)->resize(new Box(500, 300))
            ->show('jpg');
    }

    public function actionUpload()
    {
        $model = new UploadForm();

        if (Yii::$app->request->isPost) {
//            var_dump($_FILES['imageFiles']);
//            die();
            $model->imageFile = UploadedFile::getInstancesByName('imageFile')[0];
//            var_dump($model->imageFiles );
//            die();
            if ($model->singleUpload()) {
                // file is uploaded successfully
//                return '{}';
                var_dump($model->imageFile);
            } else {
                var_dump(999);
            }

            die();
        }

//        return $this->render('upload', ['model' => $model]);
//
        //  return $this->render('upload', ['model' => $model]);
    }
}
