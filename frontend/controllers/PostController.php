<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\MyLogin;

class PostController extends Controller
{
  // list
  public function actionList()
  {
    $model = new MyLogin();
    $this->layout = 'MyLayout';
    if (Yii::$app->request->isPost && $passwd = Yii::$app->request->post('password')) {
      $model->load(Yii::$app->request->post());

      $session = Yii::$app->session;
      if ($model->validate()) {
        $session->setFlash('success', "Ro'yxatdan o'tdi");
        echo $session->getFlash('success');
      } else {
        $session->setFlash('danger', $model->getErrorSummary(false)[0]);
        echo $session->getFlash('danger');
      }
    }
    return $this->render('list', ['model' => $model]);
  }

  // add
  public function actionAdd()
  {
    $model = new MyLogin();
    if (Yii::$app->request->isPost && $passwd = Yii::$app->request->post('password')) {
      $model->load(Yii::$app->request->post(), '');

      $session = Yii::$app->session;
      if ($model->validate()) {
        $session->setFlash('success', "Ro'yxatdan o'tdi");
        echo $session->getFlash('success');
        // Yii::$app->session->setFlash('success', "Ro'yxatdan o'tdi");
      } else {
        // print_r($model->getFirstErrors());
        // die;

        // foreach ($model->getFirstErrors() as $field => $error) {
        //   // $session->setFlash('danger', $error);
        //   // echo $session->getFlash('danger');
        //   // Yii::$app->session->setFlash('danger', $error);
        // }

        $session->setFlash('danger', $model->getErrorSummary(false)[0]);
        echo $session->getFlash('danger');
      }
    }
    return $this->render('add', [
      'model' => $model
    ]);
  }
}
