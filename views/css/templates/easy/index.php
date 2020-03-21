<?php
	use yii\helpers\Html;

?>

<h1>Перечень Легких шаблонов</h1>
<br>
<br>

<ol>
	<li>
		<?= Html::a('Mogo Facts', ['template', 'level' => 'easy', 'name' => 'mogo_facts']) ?>
	</li>
	<li>
		<?= Html::a('Mogo Quote', ['template', 'level' => 'easy', 'name' => 'mogo_quote']) ?>
	</li>
</ol>
