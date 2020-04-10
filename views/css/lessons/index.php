<?php
	use yii\helpers\Html;

?>

<h1>Перечень Уроков</h1>
<br>
<br>

<ol>
	<li>
		<?= Html::a('Введение', ['lesson', 'theme' => 'intro']) ?>
	</li>
	<li>
		<?= Html::a('Синтаксис', ['lesson', 'theme' => 'syntax']) ?>
	</li>
	<li>
		<?= Html::a('Селекторы', ['lesson', 'theme' => 'selectors']) ?>
	</li>
	<li>
		<?= Html::a('Способы подключения', ['lesson', 'theme' => 'connection']) ?>
	</li>
	<li>
		<?= Html::a('Коментарии', ['lesson', 'theme' => 'comments']) ?>
	</li>
	<li>
		<?= Html::a('Цвет', ['lesson', 'theme' => 'color']) ?>
	</li>
	<li>
		<?= Html::a('Фон', ['lesson', 'theme' => 'background']) ?>
	</li>
	<li>
		<?= Html::a('Рамки', ['lesson', 'theme' => 'borders']) ?>
	</li>
	<li>
		<?= Html::a('Внешние отступ', ['lesson', 'theme' => 'margin']) ?>
	</li>
	<li>
		<?= Html::a('Внутренний отступ', ['lesson', 'theme' => 'padding']) ?>
	</li>
	<li>
		<?= Html::a('Коментарии', ['lesson', 'theme' => 'comments']) ?>
	</li>
	<li>
		<?= Html::a('Размеры', ['lesson', 'theme' => 'size']) ?>
	</li>
	<li>
		<?= Html::a('Блочная и строчная модели', ['lesson', 'theme' => 'block_inline']) ?>
	</li>
	<li>
		<?= Html::a('Внешняя линия(контур)', ['lesson', 'theme' => 'outline']) ?>
	</li>
	<li>
		<?= Html::a('Текст', ['lesson', 'theme' => 'text']) ?>
	</li>
	<li>
		<?= Html::a('Fonts', ['lesson', 'theme' => 'fonts']) ?>
	</li>
	<li>
		<?= Html::a('Иконки', ['lesson', 'theme' => 'icons']) ?>
	</li>
	<li>
		<?= Html::a('Grid', ['lesson', 'theme' => 'grid']) ?>
	</li>
</ol>
