<?php

use yii\widgets\ListView;

$this->title = 'Post';

$this->params['breadcrumbs'][] = $this->title;

echo ListView::widget([
  'dataProvider' => $provider,
  'itemView' => '_post',
  'itemOptions' => [
    'class' => 'col',
  ],
  // 'options' => [
  //   'tag' => 'div',
  //   'class' => 'row row-cols-1 row-cols-md-2 g-4',
  // ]
  'options' => ['class' => 'row'],
  'layout' => "<div class='row row-cols-1 row-cols-md-2 g-4'>{summary}\n{items}\n{pager}</div>",
  'pager' => [
    'class' => 'yii\bootstrap4\LinkPager'
  ],
  'summary' => 'Jami <b>{totalCount}</b> ta malumotdan <b>{count}</b> tasi ko\'rsatilmoqda'
]);
