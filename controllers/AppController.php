<?php

namespace app\controllers;

use yii\web\Controller;

class AppController extends Controller
{
    public function actionIndex()
    {
        return $this->layout = 'grocery';
    }
}
