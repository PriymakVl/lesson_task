<?php
	use yii\helpers\Html;

?>

<h1>Перечень  шаблонов средней сложности</h1>
<br>
<br>

<ol>
	<li>
		<?= Html::a('SVG Social Icons', ['template', 'level' => 'middle', 'name' => 'svg_social_icons']) ?>
	</li>
	<li>
		<?= Html::a('Fontawesome Social Icons', ['template', 'level' => 'middle', 'name' => 'fontawesome_social_icons']) ?>
	</li>
	<li>
		<?= Html::a('Active Box Work', ['template', 'level' => 'middle', 'name' => 'active_box_work']) ?>
	</li>
</ol>
