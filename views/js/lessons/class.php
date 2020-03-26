<?php 

	use yii\helpers\Html;
 ?>

 <a href="/js" class="btn btn-primary">Уроки</a>

<h1>Задачи для урока Class</h1>
<br><br>

<ol>
	<li>
		<?= Html::a('При клике по кнопке менять квадрат на круг и на оборот', ['task', 'name' => 'change_class', 'lesson' => 'class']) ?>
	</li>
</ol>