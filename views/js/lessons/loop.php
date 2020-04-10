<?php 

	use yii\helpers\Html;
 ?>

 <a href="/js" class="btn btn-primary">Уроки</a>

<h1>Задачи для урока Цикл</h1>
<br><br>

<ol>
	<li>
		<?= Html::a('Вывести столбец цифр от 1 до 10', ['task', 'name' => 'create_column_integer', 'lesson' => 'loop']) ?>
	</li>
	<li>
		<?= Html::a('Вывести в столбец значения массива', ['task', 'name' => 'create_column_item_array', 'lesson' => 'loop']) ?>
	</li>
</ol>