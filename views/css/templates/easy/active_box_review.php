<?php 
	use yii\helpers\Html;
	$this->registerCssFile('/css/templates/easy_templates/active_box_review.css');
	$this->registerCssFile('https://fonts.googleapis.com/css?family=Cardo:400i|Raleway:700&display=swap');

	$this->title = 'шаблон "Active Box Review"';
	$this->params['breadcrumbs'][] = ['label' => 'Легкие шаблоны', 'url' => ['/css/templates/easy']];
	$this->params['breadcrumbs'][] = $this->title;
 ?>

<h1><?= $this->title ?></h1>

 <?= Html::a('Скачать задание', ['/tasks/css/templates/active_box_review_task.rar'], ['class' => 'btn btn-primary']) ?>
 <?= Html::a('Скачать решение', ['/solutions/css/templates/active_box_review_solution.rar'], ['class' => 'btn btn-primary']) ?>

<div class="window-task">
	
<!-- Active Box Review -->
	<div class="review">
	    <div class="review__photo">
	        <?= Html::img('/images/css/templates/active_box_review/review-1.jpg') ?>
	    </div>
	    <div class="review__content">
	        <div class="review__text">“Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec sed odio dui. Aenean eu leo quam...”</div>
	        <div class="review__author">Susan Sims, Interaction Designer at XYZ</div>
	        <ul class="review__dots">
	            <li>&#8226;</li>
	            <li class="active">&#8226;</li>
	            <li>&#8226;</li>
	            <li>&#8226;</li>
	            <li>&#8226;</li>
	        </ul>
	    </div>
	</div><!-- /.reviews -->

</div>
