<?php
	use yii\helpers\Html;

?>

<h1>Перечень Уроков</h1>
<br>
<br>

<ol>
	<li>
		<?= Html::a('Introduce', ['lesson', 'theme' => 'grid', 'section' => 'introduce']) ?>
	</li>
	<li>
		<?= Html::a('3 колонки', ['lesson', 'theme' => 'grid', 'section' => 'colums_three']) ?>
	</li>
</ol>
