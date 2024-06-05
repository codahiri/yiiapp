<?php

namespace frontend\controllers;

use yii\web\Controller;
use Yii;
use yii\db\Query;

class ProductController extends Controller
{
  public function actionList()
  {
    // select all products
    $products = Yii::$app->db->createCommand('SELECT * FROM products')->queryAll();

    // select single product
    $params = [':productCode' => 'S10_1678'];
    $product = Yii::$app->db->createCommand("SELECT * FROM products WHERE productCode=:productCode", $params)->queryOne();

    // select column product
    $productCol = Yii::$app->db->createCommand("SELECT productCode FROM products")->queryColumn();

    // select scalar
    $productScalar = Yii::$app->db->createCommand("SELECT COUNT(*) FROM products")->queryScalar();

    // query builder
    $productQuery = (new Query())
      ->select('*')
      ->from('products')
      ->where(['productCode' => 'S10_1678'])
      ->one();

    return $this->render('list', [
      'products' => $products,
      'product' => $product,
      'productCol' => $productCol,
      'productScalar' => $productScalar,
      'productQuery' => $productQuery
    ]);
  }
}
