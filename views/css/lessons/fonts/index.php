<?php
	use yii\helpers\Html;

?>

<h1>Перечень уроков тема Шрифты</h1>
<br>
<br>

<ol>
	<li>
		<?= Html::a('Font family', ['https://www.w3schools.com/css/css_font.asp']) ?>
	</li>
	<li>
		<?= Html::a('Font style, weight', ["https://www.w3schools.com/css/css_font_style.asp"]) ?>
	</li>
	<li>
		<?= Html::a('Font size', ["https://www.w3schools.com/css/css_font_size.asp"]) ?>
	</li>
	<li>
		<?= Html::a('Font files', ["https://developers.google.com/web/fundamentals/performance/optimizing-content-efficiency/webfont-optimization?hl=ru"]) ?>
	</li>
	<li>
		<?= Html::a('Font google', ["https://fonts.google.com/"]) ?>
	</li>
	<li>
		<?= Html::a('Font upload', ["https://webfonts.pro/"]) ?>
	</li>
	<li>
		<?= Html::a('Font Robota upload', ["https://webfonts.pro/"]) ?>
	</li>
	<li>
		<?= Html::a('Font Robota upload', ['lesson', 'theme' => 'fonts', 'section' => 'font_upload_roboto']) ?>
	</li>
</ol>
