<?php
/**
 * Created by PhpStorm.
 * User: Denis Bondar
 * Date: 12.07.2017
 * Time: 15:25
 */

namespace app\modules\api\controllers;


use yii\rest\Controller;

class TestController extends Controller
{
    public function actionIndex()
    {
        return ['status' => 'ok'];
    }
}
