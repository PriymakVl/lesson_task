<?php

namespace app\controllers;

class JsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }


    public function actionLesson ($name) 
    {
    	return $this->render('lessons/'.$name);
    }

    public function actionTask ($lesson, $name) 
    {
    	return $this->render('tasks/'.$lesson.'/'.$name);
    }
    
    

}
