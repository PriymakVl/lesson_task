<?php 
	use yii\helpers\Html;
	$this->registerCssFile('/css/templates/easy_templates/mogo_testimonial.css');
	$this->registerCssFile('https://fonts.googleapis.com/css?family=Kaushan+Script|Roboto:300i&display=swap');

	$this->title = 'шаблон "Mogo Testimonial"';
	$this->params['breadcrumbs'][] = ['label' => 'CSS', 'url' => ['/css']];
	$this->params['breadcrumbs'][] = ['label' => 'Легкие шаблоны', 'url' => ['/css/templates/easy']];
	$this->params['breadcrumbs'][] = $this->title;
 ?>

<h1><?= $this->title ?></h1>

 <?= Html::a('Скачать задание', ['/tasks/css/templates/mogo_testimonial_task.rar'], ['class' => 'btn btn-primary']) ?>
 <?= Html::a('Скачать решение', ['/solutions/css/templates/mogo_testimonial_solution.rar'], ['class' => 'btn btn-primary']) ?>

<div class="window-task">
	
<!-- Mogo Testimonial -->
<div class="testimonial">
    <?= Html::img('/images/css/templates/mogo_testimonial/avatar.png', ['class' => 'testimonial__photo']) ?>
    <div class="testimonial__content">
    	<div class="testimonial__text">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</div>
    	<div class="testimonial__author">Joshua Earle</div>
    </div>
</div>


</div>
