<?php
	use yii\helpers\Html;

?>

<h1>Перечень Меню</h1>
<br>
<br>

<ol>
	<li>
		<?= Html::a('Workshop Menu', ['template', 'level' => 'navigation', 'name' => 'workshop_menu']) ?>
	</li>
	<li>
		<?= Html::a('Law Menu', ['template', 'level' => 'navigation', 'name' => 'law_menu']) ?>
	</li>
	<li>
		<?= Html::a('Regna Menu', ['template', 'level' => 'navigation', 'name' => 'regna_menu']) ?>
	</li>
</ol>
