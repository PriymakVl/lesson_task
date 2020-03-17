<?php 

	use yii\helpers\Html;
 ?>

 <a href="/js" class="btn btn-primary">Уроки</a>

<h1>Задачи для урока Text</h1>
<br><br>

<ol>
	<li>
		<?= Html::a('Показать текущую дату и время', ['task', 'name' => 'show_date', 'lesson' => 'date']) ?>
	</li>
	<li>
		<?= Html::a('Показать количество миллисекунд (тысячная доля секунды), прошедших с 1 января 1970', ['task', 'name' => 'show_time_1970', 'lesson' => 'date']) ?>
	</li>
	<li>
		<?= Html::a('Методы объекта Date (год, месяц, день)', ['task', 'name' => 'method_year', 'lesson' => 'date']) ?>
	</li>
	<li>
		<?= Html::a('Методы объекта Date (часы, минуты, секунды)', ['task', 'name' => 'method_hour', 'lesson' => 'date']) ?>
	</li>
	<li>
		<?= Html::a('Поздороваться в зависимости от времени суток', ['task', 'name' => 'hello_day', 'lesson' => 'date']) ?>
	</li>
	<li>
		<?= Html::a('Часы', ['task', 'name' => 'clock', 'lesson' => 'date']) ?>
	</li>
</ol>