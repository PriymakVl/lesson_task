<?php
	use yii\helpers\Html;

?>

<h1>Перечень Легких шаблонов</h1>
<br>
<br>

<ol>
	<li>
		<?= Html::a('Mogo Logos', ['template', 'level' => 'easy', 'name' => 'mogo_logos']) ?>
	</li>
	<li>
		<?= Html::a('Active Box Download', ['template', 'level' => 'easy', 'name' => 'active_box_download']) ?>
	</li>
	<li>
		<?= Html::a('Mogo Facts', ['template', 'level' => 'easy', 'name' => 'mogo_facts']) ?>
	</li>
	<li>
		<?= Html::a('Mogo Quote', ['template', 'level' => 'easy', 'name' => 'mogo_quote']) ?>
	</li>
	<li>
		<?= Html::a('Mogo Testimonial', ['template', 'level' => 'easy', 'name' => 'mogo_testimonial']) ?>
	</li>
	<li>
		<?= Html::a('Mogo Map', ['template', 'level' => 'easy', 'name' => 'mogo_map']) ?>
	</li>
	<li>
		<?= Html::a('Active Box Features', ['template', 'level' => 'easy', 'name' => 'active_box_features']) ?>
	</li>
	<li>
		<?= Html::a('Active Box Team', ['template', 'level' => 'easy', 'name' => 'active_box_team']) ?>
	</li>
</ol>
