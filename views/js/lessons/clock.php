<?php 

	use yii\helpers\Html;
 ?>

 <a href="/js" class="btn btn-primary">Уроки</a>

<h1>Задачи для урока Clock</h1>
<br><br>

<ol>
	<li>
		<?= Html::a('Часы с датой в поле формы', ['task', 'name' => 'clock_date_input', 'lesson' => 'clock']) ?>
	</li>
	<li>
		<?= Html::a('Часы', ['task', 'name' => 'clock', 'lesson' => 'clock']) ?>
	</li>
</ol>