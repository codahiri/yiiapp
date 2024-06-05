<?php

use yii\bootstrap4\Html;

$this->title = 'Post Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
  <div class="col-lg-5">
    <?= Html::beginForm() ?>

    <?= Html::input('text', 'username', $model->username, ['class' => 'form-control my-2', 'placeholder' => 'Enter your username']) ?>
    <?= Html::input('password', 'password', $model->password, ['class' => 'form-control my-2', 'placeholder' => 'Enter your password']) ?>

    <?= Html::tag('button', 'Submit', ['class' => 'btn btn-success', 'name' => 'submit']) ?>

    <?= Html::endForm() ?>
  </div>
</div>