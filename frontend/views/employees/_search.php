<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\EmployeesSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="employees-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'employeeNumber') ?>

    <?= $form->field($model, 'lastName') ?>

    <?= $form->field($model, 'firstName') ?>

    <?= $form->field($model, 'extension') ?>

    <?= $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'officeCode') ?>

    <?php // echo $form->field($model, 'reportsTo') ?>

    <?php // echo $form->field($model, 'jobTitle') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
