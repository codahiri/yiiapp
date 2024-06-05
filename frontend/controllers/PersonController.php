<?php

namespace frontend\controllers;

use frontend\models\Person;
use Yii;
use yii\web\Controller;

class PersonController extends Controller
{
  public function actionIndex()
  {
    $person = Person::find()->one();
    // $person->firstname = "G'ishmat";
    // $person->lastname = "Toshmatov";
    // $person->email = "toshmat@mail.uz";
    // $person->age = 25;
    // $person->gender = 'erkak';
    // $person->save();
    return $this->render('index', ['model' => $person]);
  }

  public function actionAdd()
  {
    $person = new Person();
    $app = Yii::$app;
    if ($app->request->isPost) {
      $person->load($app->request->post());
      $person->gender = $person->gender == 0 ? 'Erkak' : 'Ayol';
      $person->save();
    }

    return $this->render('add', ['model' => $person]);
  }
}
