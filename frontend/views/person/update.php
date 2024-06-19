<?php

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

?>

<h1>Bu post list fayl</h1>
<div class="row">
  <div class="col-md-12">
    <?php $form = ActiveForm::begin(['id' => 'list-form']); ?>
    <div class="row">
      <div class="col-md-6">
        <?= $form->field($model, 'firstname')->textInput(['autofocus' => true]); ?>
        <?= $form->field($model, 'lastname') ?>
        <?= $form->field($model, 'email')->input('email'); ?>
      </div>

      <div class="col-md-6">
        <?= $form->field($model, 'gender')->dropDownList(['erkak', 'ayol'], ['prompt' => 'Bittasini tanlang']); ?>
        <?= $form->field($model, 'age')->input('number'); ?>
        <div class="form-group">
          <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
        </div>
      </div>
    </div>
    <?php ActiveForm::end(); ?>
  </div>
</div>