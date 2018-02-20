<?php

namespace app\controllers\admin;

use yii\web\Controller;

class UserController extends Controller{

	public function actionIndex(){

		$admin = "Hello, Admin";

		return $this->render('index', compact('admin'));
	}

}