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
</ol>
