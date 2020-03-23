<?php 

	use yii\helpers\Html;
 ?>

 <a href="/js" class="btn btn-primary">Уроки</a>

<h1>Задачи для урока Prompt</h1>
<br><br>

<ol>
	<li>
		<?= Html::a('Устанавливать фон блока по полученному значению', ['task', 'name' => 'set_bg_element', 'lesson' => 'Prompt']) ?>
	</li>
</ol>