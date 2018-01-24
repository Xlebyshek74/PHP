<?php
namespace app\controllers;
use yii\web\Controller;

class MainController extends Controller
{
	public $defaultAction = 'show';
	
	
	public function actionShow()
	{
		//return $this->renderContent('CSU!');
		return $this->render('test', ['data' => 'Main', 'data2' => 'Show']); 
	}
}