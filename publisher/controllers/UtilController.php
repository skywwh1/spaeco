<?php

namespace publisher\controllers;

use common\models\Geo;
use yii\web\Controller;

/**
 * Site controller
 */
class UtilController extends Controller
{

    /**
     * Displays homepage.
     *
     * @param $name
     * @return array
     */
    public function actionGeo($name)
    {
        $out = ['results' => ['id' => '', 'text' => '']];
        if (!$name) {
            $this->asJson($out);
        }

        $data = Geo::find()
            ->select('domain id, domain text')
            ->andFilterWhere(['like', 'domain', $name])
            ->limit(50)
            ->asArray()
            ->all();

        $out['results'] = array_values($data);

        $this->asJson($out);
    }


}
