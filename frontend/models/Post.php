<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class Post extends ActiveRecord
{
  // public static function getDb()
  // {
  //   return \Yii::$app->db;
  // }

  public static function tableName()
  {
    return 'post';
  }
}
