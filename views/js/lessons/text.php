<?php 

	use yii\helpers\Html;
 ?>

 <a href="/js" class="btn btn-primary">Уроки</a>

<h1>Задачи для урока Text</h1>
<br><br>

<ol>
	<li>
		<?= Html::a('При клике по ссылке изменить текст и цвет текста абзаца с классом demo', ['task', 'name' => 'change_text_color', 'lesson' => 'text']) ?>
	</li>
</ol>