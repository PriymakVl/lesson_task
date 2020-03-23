<?php 

	use yii\helpers\Html;
 ?>

 <a href="/js" class="btn btn-primary">Уроки</a>

<h1>Задачи для урока Event (Событие) </h1>
<br><br>

<ol>
	<li>
		<?= Html::a('При клике по ссылке скрывать элемент по другой показывать', ['task', 'name' => 'hide_element', 'lesson' => 'event']) ?>
	</li>
		<li>
		<?= Html::a('При наведении курсора на элемент и уходе с него менять цвет элемента', ['task', 'name' => 'change_bg_element', 'lesson' => 'event']) ?>
	</li>
		<li>
		<?= Html::a('При клике по ссылке изменить текст и цвет текста абзаца с классом demo', ['task', 'name' => 'change_text_color', 'lesson' => 'event']) ?>
	</li>
</ol>