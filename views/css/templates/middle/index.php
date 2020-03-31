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
	<li>
		<?= Html::a('Mogo Blog', ['template', 'level' => 'middle', 'name' => 'mogo_blog']) ?>
	</li>
	<li>
		<?= Html::a('Mogo Service', ['template', 'level' => 'middle', 'name' => 'mogo_service']) ?>
	</li>
	<li>
		<?= Html::a('Mogo People', ['template', 'level' => 'middle', 'name' => 'mogo_people']) ?>
	</li>
	<li>
		<?= Html::a('Mogo Card', ['template', 'level' => 'middle', 'name' => 'mogo_card']) ?>
	</li>
	<li>
		<?= Html::a('Coding Market Pricing', ['template', 'level' => 'middle', 'name' => 'coding_market_pricing']) ?>
	</li>
</ol>
