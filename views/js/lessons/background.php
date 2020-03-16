<?php 

	use yii\helpers\Html;
 ?>

 <a href="/js" class="btn btn-primary">Уроки</a>

<h1>Задачи для урока Background</h1>
<br><br>

<ol>
	<li>
		<?= Html::a('При наведении курсора на элемент и уходе с него менять цвет элемента', ['task', 'name' => 'change_bg_element', 'lesson' => 'background']) ?>
	</li>
	<li>
		<?= Html::a('Устанавливать фон блока по полученному значению', ['task', 'name' => 'set_bg_element', 'lesson' => 'background']) ?>
	</li>
</ol>