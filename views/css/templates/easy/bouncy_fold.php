<?php 
	use yii\helpers\Html;
	$this->registerCssFile('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');
	$this->registerCssFile('/css/templates/easy_templates/bouncy_fold.css');

	$this->title = 'шаблон "Bouncy Fold"';
	$this->params['breadcrumbs'][] = ['label' => 'Легкие шаблоны', 'url' => ['/css/templates/easy']];
	$this->params['breadcrumbs'][] = $this->title;
 ?>

<h1><?= $this->title ?></h1>

 <?= Html::a('Скачать задание', ['/tasks/css/templates/bouncy_fold_task.rar'], ['class' => 'btn btn-primary']) ?>
 <?= Html::a('Скачать решение', ['/solutions/css/templates/bouncy_fold_solution.rar'], ['class' => 'btn btn-primary']) ?>

<div class="window-task">
	
<!-- Bouncy Fold -->
<section class="section">
	<div class="section__inner">
		<div class="section__text">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis </div>
		<a href="#" class="btn-bouncy">Submit Now</a>
	</div>
</section>

</div>
