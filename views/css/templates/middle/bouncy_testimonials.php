<?php 
	use yii\helpers\Html;
	$this->registerCssFile('/css/templates/middle_templates/bouncy_testimonials.css');
	$this->registerCssFile('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

	$this->title = 'шаблон "Bouncy Testimonials"';
	$this->params['breadcrumbs'][] = ['label' => 'CSS', 'url' => ['/css']];
	$this->params['breadcrumbs'][] = ['label' => 'Шаблоны средней сложности', 'url' => ['/css/templates/middle']];
	$this->params['breadcrumbs'][] = $this->title;
 ?>

<h1><?= $this->title ?></h1>
<div class="key-points">google fonts, position, media, dots, scss</div>

 <?= Html::a('Скачать задание', ['/tasks/css/templates/bouncy_testimonials_task.rar'], ['class' => 'btn btn-primary']) ?>
 <?= Html::a('Скачать решение', ['/solutions/css/templates/bouncy_testimonials_solution.rar'], ['class' => 'btn btn-primary']) ?>

<div class="window-task">
	
<!-- Bouncy Testimonials -->
<div class="testimonial">
	<div class="testimonial__header">
		<div class="testimonial__title">Testimonials</div>
		<div class="testimonial__subtitle">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</div>
	</div>
	<div class="testimonial__content">
		<div class="testimonial__text">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia.</div>
		<div class="testimonial__author">PARTHO</div>
		<div class="testimonial__prof">FOUNDER, ARTWAYS BD</div>
		<ul class="dots">
		    <li class="active"></li>
		    <li></li>
		    <li></li>
		</ul>
		<div class="testimonial__photo">
			<?= Html::img('/images/css/templates/bouncy_testimonials/photo.jpg', ['alt' => 'photo']);?>
		</div>
	</div>
</div>


</div>
