<?php 

	use yii\helpers\Html;
 ?>

 <a href="/js" class="btn btn-primary">Уроки</a>

<h1>Задачи для урока Hide</h1>
<br><br>

<ol>
	<li>
		<?= Html::a('При клике по ссылке скрывать элемент по другой показывать', ['task', 'name' => 'hide_element', 'lesson' => 'hide']) ?>
	</li>
</ol>