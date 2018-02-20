<?php

namespace app\models;

use yii\db\ActiveRecord;




class Kostya extends ActiveRecord
{
	public static function tableName()
    {
        return 'users';
    }
}