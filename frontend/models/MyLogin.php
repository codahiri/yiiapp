<?php

namespace frontend\models;

use yii\base\Model;

class MyLogin extends Model
{
  public $firstname;
  public $lastname;
  public $username;
  public $password;
  public $email;
  public $gender;
  public $about;

  public function rules()
  {
    return [
      /**
       * 
       * * required - attributlar bo'sh emasligini tekshiradi
       * * boolean - true | false || 1 | 0 qiymatlarga tekshiradi
       * * email - attribute qiymati email ekanligini tekshiradi
       * * integer - int turiga yani butun son ekanligini tekshiradi
       * * number - son ekanligiga tekshiradi
       * * string - matn turidagi malumot ekanligini tekshiradi
       * * trim - malumotni boshi yoki oxirida bo'sh joy bo'lsa olib tashlaydi
       * * url - url ekanligiga tekshiradi
       * * in: {'in', 'ragne' => range(5, 20)} - attribute berilgan massiv ichida bor yoki yo'qligini tekshiradi
       * * each - array turidagi attribute uchun ishlatiladi
       * * date - sana ekanligini tekshiradi
       * * defaulte - boshlang'ich qiymat berish
       * * file
       * * image
       * 
       * 
       */
      [['firstname', 'lastname', 'username', 'password', 'email'], 'required', 'message' => "Bo'sh maydonni to'ldiring"],
      // ['username', 'string', 'min' => 6],
      ['username', 'string', 'length' => [3, 12]],
      ['password', 'string', 'min' => 6],
    ];
  }

  public function attributeLabels()
  {
    return [
      'firstname' => 'Foydalanuvchi ismi',
      'lastname' => 'Foydalanuvchi familiyasi',
      'username' => 'Foydalanuvchi nomi',
      'password' => 'Foydalanuvchi maxviy belgilari',
      'gender' => 'Foydalanuvchi jinsi'
    ];
  }
}
