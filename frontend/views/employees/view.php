<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Employees $model */

$this->title = $model->employeeNumber;
$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="employees-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'employeeNumber' => $model->employeeNumber], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'employeeNumber' => $model->employeeNumber], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'employeeNumber',
            'lastName',
            'firstName',
            'extension',
            'email:email',
            'officeCode',
            'reportsTo',
            'jobTitle',
        ],
    ]) ?>

</div>
