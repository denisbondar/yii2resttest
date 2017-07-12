<?php
/**
 * Created by PhpStorm.
 * User: Denis Bondar
 * Date: 12.07.2017
 * Time: 15:24
 */

namespace app\modules\api;


use Yii;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\api\controllers';

    public function init()
    {
        parent::init();

        Yii::$app->user->identityClass = false;
        Yii::$app->user->enableSession = false;
        Yii::$app->user->enableAutoLogin = false;
    }
}