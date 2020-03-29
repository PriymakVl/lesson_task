<?php 
	use yii\helpers\Html;
	$this->registerCssFile('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');
	$this->registerCssFile('/css/templates/easy_templates/bouncy_team_contact.css');

	$this->title = 'шаблон "Bouncy Team Contact"';
	$this->params['breadcrumbs'][] = ['label' => 'Легкие шаблоны', 'url' => ['/css/templates/easy']];
	$this->params['breadcrumbs'][] = $this->title;
 ?>

<h1><?= $this->title ?></h1>

 <?= Html::a('Скачать задание', ['/tasks/css/templates/bouncy_team_contact_task.rar'], ['class' => 'btn btn-primary']) ?>
 <?= Html::a('Скачать решение', ['/solutions/css/templates/bouncy_team_contact_solution.rar'], ['class' => 'btn btn-primary']) ?>

<div class="window-task">
	
	<!-- Bouncty Team Contact -->
	<div class="contact">
		<div class="contact__title">Already Loved Us? Let’s talk!</div>
		<a href="#" class="btn">Contact Us</a>
	</div>

</div>
