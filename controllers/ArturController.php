<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class ArturController extends Controller
{
	public $defaultAction = 'say';
    public function actionSay($name)
	{
		return $this->render('artur', ['message' => "Hello, $name!"]);
	}
}
