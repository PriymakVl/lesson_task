<?php

namespace app\controllers;

class CssController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLessons()
    {
        return $this->render('lessons/index');	
    }

    public function actionLesson($theme, $section = false)
    {
        $section = $section ? $section : 'index';
        return $this->render('lessons/'.$theme.'/'.$section);
    }

    public function actionTemplates($level) 
    {
    	return $this->render('templates/'.$level.'/index');
    }

    public function actionTemplate($level, $name) 
    {
    	return $this->render('templates/'.$level.'/'.$name);
    }

}
