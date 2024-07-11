<?php

use frontend\models\Employees;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var frontend\models\EmployeesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Employees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employees-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Employees', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'employeeNumber',
            'lastName',
            'firstName',
            'extension',
            'email:email',
            //'officeCode',
            //'reportsTo',
            //'jobTitle',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Employees $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'employeeNumber' => $model->employeeNumber]);
                }
            ],
        ],
        'pager' => [
            'class' => 'yii\bootstrap4\LinkPager'
        ]
    ]); ?>

    <?php Pjax::end(); ?>

</div>