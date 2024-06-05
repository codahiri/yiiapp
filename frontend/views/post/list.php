<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<h1>Bu post list fayl</h1>
<div class="row">
  <div class="col-md-6">
    <?php $form = ActiveForm::begin(['id' => 'list-form']); ?>

    <?= $form->field($model, 'firstname')->textInput(['autofocus' => true, 'placeholder' => 'Enter your first name, e.g. Bob'])->label(false); ?>
    <?= $form->field($model, 'lastname')->textInput(['placeholder' => 'Enter your last name, e.g. John'])->label(false); ?>

    <?= $form->field($model, 'username')->textInput(['placeholder' => 'Enter your username, e.g. bob', 'type' => 'text'])->label(false); ?>

    <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Enter your password, e.g. 1234'])->label(false); ?>

    <?= $form->field($model, 'email')->input('email', ['placeholder' => 'Enter your email, e.g. example@mail.com'])->label(false); ?>

    <?= $form->field($model, 'gender')->dropDownList(['erkak', 'ayol'], ['prompt' => 'Bittasini tanlang'])->label(false); ?>

    <?= $form->field($model, 'about')->textarea(['rows' => 5, 'cols' => 10, 'placeholder' => 'Enter about yourself'])->label(false) ?>

    <div class="form-group">
      <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
    </div>

    <?php ActiveForm::end(); ?>
  </div>
</div>