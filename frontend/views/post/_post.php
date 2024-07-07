<?php

use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>
<div class="card my-2">
  <!-- <img src="/img/book.jpg" alt="book"> -->
  <div class="card-body">
    <h5 class="card-title"><?= Html::encode($model->title) ?></h5>
    <p class="card-text"><?= HtmlPurifier::process($model->content) ?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>