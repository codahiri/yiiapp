<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';

$formatter = Yii::$app->formatter;

echo $formatter->asDate('2024-06-23', 'short');

echo "<br>";

echo $formatter->asEmail('ilosrim@outlook');

echo "<br>";

echo $formatter->asBoolean(true);

echo "<br>";

echo $formatter->asPercent('3.143333', '2');

echo "<br>";

echo $formatter->asCurrency('2000000', '$', [], ['class' => 'text-danger']);
