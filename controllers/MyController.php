<?php

namespace app\controllers;

use yii\web\Controller;
use Yii;
use app\models\TestForm;

class MyController extends Controller{
	
	public function actionIndex(){
		
		//return $this->render('index', ['hello'=> $hi2]);
		

		$models = new TestForm();
		
		return $this->render('index', compact('models'));
	}
}