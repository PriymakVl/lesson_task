<?php 

	use yii\helpers\Html;
 ?>

 <a href="/js" class="btn btn-primary">Уроки</a>

<h1>Задачи для урока Array</h1>
<br><br>

<ol>
	<li>
		<?= Html::a('Изменение цвета текста в динамике', ['task', 'name' => 'change_color_text', 'lesson' => 'array']) ?>
	</li>
</ol>