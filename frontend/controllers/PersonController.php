<?php

namespace frontend\controllers;

use frontend\models\Person;
use Yii;
use yii\data\ActiveDataProvider;
use yii\data\Pagination;
use yii\data\Sort;
use yii\web\Controller;

class PersonController extends Controller
{
  public function actionIndex()
  {
    // $person = Person::find()->asArray()->all();
    // $person->firstname = "G'ishmat";
    // $person->lastname = "Toshmatov";
    // $person->email = "toshmat@mail.uz";
    // $person->age = 25;
    // $person->gender = 'erkak';
    // $person->save();
    $query = Person::find();
    // $count = $query->count();
    // $pagination = new Pagination(
    //   [
    //     'totalCount' => $count,
    //     'pageSize' => 5
    //   ]
    // );

    // $sort = new Sort([
    //   'attributes' => [
    //     'firstname',
    //     'age',
    //     'fullname' => [
    //       'asc' => ['firstname' => SORT_ASC, 'lastname', SORT_ASC],
    //       'desc' => ['firstname' => SORT_DESC, 'lastname' => SORT_DESC],
    //       'default' => SORT_DESC,
    //       'label' => 'Full name',
    //     ]
    //   ],
    // ]);

    // // $query = $query->orderBy($sort->orders);

    // $person_data = $query
    //   ->offset($pagination->offset)
    //   ->limit($pagination->limit)
    //   ->orderBy($sort->orders)
    //   ->all();

    $provider = new ActiveDataProvider([
      'query' => $query,
      'pagination' => ['pageSize' => 5],
      'sort' => [
        'defaultOrder' => [
          'id' => SORT_DESC,
          'firstname' => SORT_DESC,
          'lastname' => SORT_ASC,
        ]
      ],
    ]);

    // $model = $provider->getModels();

    return $this->render(
      'index',
      [
        // 'model' => $model,
        'provider' => $provider
        // 'pagination' => $pagination,
        // 'sort' => $sort
      ]
    );
  }

  public function actionUpdate($id)
  {

    $model = Person::findOne($id);

    $app = Yii::$app;
    if ($app->request->isPost) {
      $model->load($app->request->post());
      if ($model->save()) {
        return $this->redirect('index');
      }
    }

    return $this->render('update', ['model' => $model]);
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
