<?php

namespace app\modules\main\controllers;

use yii\web\Controller;

/**
 * Default controller for the `main` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $this->layout  = "bootstrap";
        return $this->render('index');
    }
    public function  actionPath(){
        print \Yii::getAlias('@webroot');
    }
}