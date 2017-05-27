<?php
/**
 * Created by PhpStorm.
 * User: iven
 * Date: 2017/4/21
 * Time: 18:08
 */

namespace common\models;


use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{

    /**
     * @var UploadedFile
     */
    public $imageFile;


    public function rules()
    {
        return [
//            [['imageFiles'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg', 'maxFiles' => 4],
//            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'jpg'],
        ];
    }



    /**
     * @return bool|string
     */
    public function singleUpload()
    {
        $path = Yii::getAlias('@runtime/') . $this->imageFile->baseName . '.' . $this->imageFile->extension;
        if ($this->validate() && $this->imageFile->saveAs($path)) {
            return $path;
        }
        return false;
    }
}