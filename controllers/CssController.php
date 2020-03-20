<?php

namespace app\controllers;

class CssController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function test()
    {
    	
    }

    public function actionTemplates($level) 
    {
    	return $this->render('templates/'.$level.'/index');
    }

    public function actionTemplate($level, $name) 
    {
    	return $this->render('templates/'.$level.'/'.$name.'/index');
    }

    public function actionSolution($level, $name) 
    {
    	return $this->render('templates/'.$level.'/'.$name.'/solution');
    }

}
