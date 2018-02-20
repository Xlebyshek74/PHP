<?php

namespace app\models;

use yii\db\ActiveRecord;



class Artur extends ActiveRecord
{
    public static function tableName()
    {
        return 'users';
    }
}