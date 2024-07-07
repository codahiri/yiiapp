<?php

// use yii\bootstrap4\LinkPager;
use yii\grid\GridView;
use yii\widgets\ListView;

// echo $provider->sort->link('id') . ' | ' . $provider->sort->link('firstname') . ' | ' . $provider->sort->link('age');
?>

<!-- <table class="table table-hover">
  <tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Age</th>
    <th>Gender</th>
  </tr>

  <?php foreach ($provider->getModels() as $item) : ?>
    <tr>
      <td><?= $item['id'] ?></td>
      <td><?= $item['firstname'] ?></td>
      <td><?= $item['lastname'] ?></td>
      <td><?= $item['email'] ?></td>
      <td><?= $item['age'] ?></td>
      <td><?= $item['gender'] ?></td>
    </tr>
  <?php endforeach ?>

</table> -->

<?php
// echo LinkPager::widget([
//   'pagination' => $provider->pagination,
//   'nextPageLabel' => 'Keyingi',
//   'prevPageLabel' => 'Oldinigi'
// ]);



echo GridView::widget([
  'dataProvider' => $provider,
  'pager' => [
    'class' => 'yii\bootstrap4\LinkPager'
  ],
  // 'columns' => [
  //   'id',
  //   'firstname'
  // ],
]);

// echo ListView::widget([
//   'dataProvider' => $provider,
//   'pager' => [
//     'class' => 'yii\bootstrap4\LinkPager'
//   ],
// ]);
