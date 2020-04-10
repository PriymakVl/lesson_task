<?php
	use yii\helpers\Html;

?>

<h1>Список задач javascript</h1>

<p>
<h1></h1>
<br>
<br>
<br>
<ol>
	<li>
		<a href="https://learn.javascript.ru/intro#chto-mozhet-javascript-v-brauzere" target="_blank">Введение</a>
	</li>
	<li>
		<?= Html::a('Event', ['lesson', 'name' => 'event']) ?>
	</li>
	<li>
		<?= Html::a('Prompt', ['lesson', 'name' => 'prompt']) ?>
	</li>
	<li>
		<?= Html::a('Methods', ['lesson', 'name' => 'methods']) ?>
	</li>
	<li>
		<?= Html::a('Date', ['lesson', 'name' => 'date']) ?>
	</li>
	<li>
		<?= Html::a('SetTimeout', ['lesson', 'name' => 'settimeout']) ?>
	</li>
	<li>
		<?= Html::a('Clock', ['lesson', 'name' => 'clock']) ?>
	</li>
	<li>
		<?= Html::a('Class', ['lesson', 'name' => 'class']) ?>
	</li>
	<li>
		<?= Html::a('Slider', ['lesson', 'name' => 'slider']) ?>
	</li>
	<li>
		<?= Html::a('Array', ['lesson', 'name' => 'array']) ?>
	</li>
	<li>
		<?= Html::a('Строка (string)', ['lesson', 'name' => 'string']) ?>
	</li>
	<li>
		<?= Html::a('Цикл (loop)', ['lesson', 'name' => 'loop']) ?>
	</li>
</ol>
