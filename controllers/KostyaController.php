<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Kostya;

class KostyaController extends Controller
{

    public function actionDelete()
    {
        $delete = Kostya::findOne(4);
        $delete->delete();

        return $this->render('delete',compact($delete));
    }
    public function actionUpdate()
    {
        $update = Kostya::findOne(4);
        $update->name = 'Nikita';
        $update->age = '26';
        $update->birthday = '1998-12-12';
        $update->save();

        return $this->render('update', compact('$update'));
    }

    public function actionInsert()
    {
        $insert = new Kostya;
        $insert->name = 'Alex';
        $insert->age = 30;
        $insert->birthday = '1992-12-12';
        $insert->save();

        return $this->render('insert', compact('$insert'));
    }

    public function actionIndex()
    {
        //$query = Kostya::find();


        // find создания объекта запроса all получение данных в виде объектов

        // $countries = Kostya::find()->all(); //SELECT * FROM `users`
        //$countries = Kostya::find()->orderBy(['id' => SORT_DESC])->all();   //SELECT * FROM `users` ORDER BY `id` DESC
        //$countries = Kostya::find()->asArray()->all();

                            //SELECT * FROM `users` WHERE `name`='artur' ORDER BY `id` DESC
       // $countries = Kostya::find()->orderBy(['id' => SORT_DESC])->where(['name'=>'artur'])->all();

                            //SELECT * FROM `users` WHERE `id` > '1' ORDER BY `id` DESC

                                                 #   OR И AND

       //$countries = Kostya::find()->orderBy(['id' => SORT_DESC])->where(['>=','age','19'])->orWhere(['<=','age','22'])->all();
       $countries = Kostya::find()->orderBy(['id' => SORT_DESC])->where(['>=','age','19'])->andWhere(['<=','age','22'])->all();

                                        #SELECT * FROM `country` WHERE `code`='US'
        //$countries = Kostya::find()->asArray()->where(['code'=> 'US'])->all();

        $a = $countries;




        return $this->render('index', [
            'a' => $a,
            
        ]);
    }
}