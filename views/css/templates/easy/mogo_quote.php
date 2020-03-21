<?php 
	use yii\helpers\Html;
	$this->registerCssFile('/css/templates/easy_templates/mogo_quote.css');
	$this->registerCssFile('https://fonts.googleapis.com/css?family=Roboto:300i&display=swap');
	$this->registerCssFile('https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap');

	$this->title = 'шаблон "Mogo Quote"';
	$this->params['breadcrumbs'][] = ['label' => 'Легкие шаблоны', 'url' => ['/css/templates/easy']];
	$this->params['breadcrumbs'][] = $this->title;
 ?>

<h1><?= $this->title ?></h1>

 <?= Html::a('Скачать задание', ['/tasks/css/templates/mogo_quote_task.rar'], ['class' => 'btn btn-primary']) ?>
 <?= Html::a('Скачать решение', ['/solutions/css/templates/mogo_quote_solution.rar'], ['class' => 'btn btn-primary']) ?>

<div class="window-task">
	
<!-- Mogo Quote -->
<div class="quote">
	<div class="quote__content">
		<div class="quote__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</div>
		<div class="quote__author">Jon Doe</div>
	</div>
	<div class="quote__img">
		<?= Html::img('/images/css/templates/mogo_quote/speech.png') ?>
	</div>
</div>

</div>
