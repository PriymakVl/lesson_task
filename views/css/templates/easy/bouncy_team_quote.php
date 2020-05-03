<?php 
	use yii\helpers\Html;
	$this->registerCssFile('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,700;1,400&family=Source+Sans+Pro:wght@300&display=swap');
	$this->registerCssFile('/css/templates/easy_templates/bouncy_team_quote.css');

	$this->title = 'шаблон "Bouncy Team Quote"';
	$this->params['breadcrumbs'][] = ['label' => 'Легкие шаблоны', 'url' => ['/css/templates/easy']];
	$this->params['breadcrumbs'][] = $this->title;
 ?>

<h1><?= $this->title ?></h1>

 <?= Html::a('Скачать задание', ['/tasks/css/templates/bouncy_team_quote_task.rar'], ['class' => 'btn btn-primary']) ?>
 <?= Html::a('Скачать решение', ['/solutions/css/templates/bouncy_team_quote_solution.rar'], ['class' => 'btn btn-primary']) ?>

<div class="window-task">
	
<!-- Bouncty Team Quote -->
<div class="quote">
	<div class="quote__content">
		<div class="quote__title">Impressed ?</div>
		<div class="quote__text">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias</div>
		<div class="quote__author">- Abdullah Noman</div>
		<div class="quote__prof">Creatice Director, <span>Code Cafe</span></div>
	</div>
	<?=Html::img('/images/css/templates/bouncy_team_quote/bouncy.png', ['class' => 'quote__img']) ?>
</div>

</div>
