<?php
	use yii\helpers\Html;

?>

<h1>Перечень Легких шаблонов</h1>
<br>
<br>

<ol>
	<li>
		<?= Html::a('Law Menu', ['template', 'level' => 'navigation', 'name' => 'law_menu']) ?>
	</li>
	<li>
		<?= Html::a('Regna Menu', ['template', 'level' => 'navigation', 'name' => 'regna_menu']) ?>
	</li>
</ol>
