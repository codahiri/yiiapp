<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class Person extends ActiveRecord
{
  public static function getDb()
  {
    return \Yii::$app->db;
  }

  public static function tableName()
  {
    return 'person';
  }

  public function rules()
  {
    return [
      [['firstname', 'lastname', 'email'], 'required'],
      ['email', 'email'],
      ['age', 'integer']
    ];
  }
}
