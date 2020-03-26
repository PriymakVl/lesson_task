<?php 

	use yii\helpers\Html;
 ?>

 <a href="/js" class="btn btn-primary">Уроки</a>

<h1>Задачи для урока Methods</h1>
<br><br>

<ol>
	<li>
		<?= Html::a('Найти родителя у элемента', ['task', 'name' => 'closest', 'lesson' => 'methods']) ?>
	</li>
</ol>