<?php 

	use yii\helpers\Html;
 ?>

 <a href="/js" class="btn btn-primary">Уроки</a>

<h1>Задачи для урока Slider</h1>
<br><br>

<ol>
	<li>
		<?= Html::a('Смена большой картинки при клике по маленькой', ['task', 'name' => 'change_img', 'lesson' => 'slider']) ?>
	</li>
</ol>