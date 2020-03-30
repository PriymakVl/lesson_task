<?php 

	use yii\helpers\Html;
 ?>

 <a href="/js" class="btn btn-primary">Уроки</a>

<h1>Задачи для урока SetTimeOut</h1>
<br><br>

<ol>
	<li>
		<?= Html::a('Показать c задержкой в 3 секунды модальное окно с hello', ['task', 'name' => 'hello', 'lesson' => 'settimeout']) ?>
	</li>
	<li>
		<?= Html::a('Остановить показ окна с hello, нажать быстрее 3 секундв', ['task', 'name' => 'hello_stop', 'lesson' => 'settimeout']) ?>
	</li>
</ol>