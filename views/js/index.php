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
		<?= Html::a('HIde', ['lesson', 'name' => 'hide']) ?>
	</li>
	<li>
		<?= Html::a('Background', ['lesson', 'name' => 'background']) ?>
	</li>
	<li>
		<?= Html::a('Text', ['lesson', 'name' => 'text']) ?>
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
		<?= Html::a('Slider', ['lesson', 'name' => 'slider']) ?>
	</li>
</ol>
