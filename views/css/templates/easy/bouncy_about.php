<?php 
	use yii\helpers\Html;
	$this->registerCssFile('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');
	$this->registerCssFile('/css/templates/easy_templates/bouncy_about.css');

	$this->title = 'шаблон "Bouncy About"';
	$this->params['breadcrumbs'][] = ['label' => 'Легкие шаблоны', 'url' => ['/css/templates/easy']];
	$this->params['breadcrumbs'][] = $this->title;
 ?>

<h1><?= $this->title ?></h1>

 <?= Html::a('Скачать задание', ['/tasks/css/templates/bouncy_about_task.rar'], ['class' => 'btn btn-primary']) ?>
 <?= Html::a('Скачать решение', ['/solutions/css/templates/bouncy_about_solution.rar'], ['class' => 'btn btn-primary']) ?>

<div class="window-task">
	
	<!-- Bouncty About -->
	<div class="about">
		<div class="about__inner">
			<div class="about__content">
				<div class="about__title">This is Bouncy</div>
				<div class="about__text">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. </div>
				<a href="#" class="btn">Read More</a>
			</div>
			<div class="about__img"></div>
		</div>
	</div>

</div>
