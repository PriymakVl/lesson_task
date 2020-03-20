<?php 
	use yii\helpers\Html;
	$this->registerCssFile('/css/templates/easy_templates/mogo_facts.css');
	$this->registerCssFile('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

	$this->title = 'шаблон "Mogo Facts"';
	$this->params['breadcrumbs'][] = ['label' => 'Легкие шаблоны', 'url' => ['/css/templates/easy']];
	$this->params['breadcrumbs'][] = $this->title;
 ?>

<h1><?= $this->title ?></h1>

 <?= Html::a('Скачать задание', ['/tasks/css/templates/mogo_facts_task.rar'], ['class' => 'btn btn-primary']) ?>
 <?= Html::a('Скачать решение', ['/solutions/css/templates/mogo_facts_solution.rar'], ['class' => 'btn btn-primary']) ?>

<div class="window-task">
	
<!-- Facts -->
<div class="facts">
	<div class="fact"> 
		<div class="fact_number">42</div> 
		<div class="fact_text">Web Design Projects</div>
	</div>
	<div class="fact">
		<div class="fact_number">135</div> 
		<div class="fact_text">happy client</div>
	</div>
	<div class="fact">
		<div class="fact_number">15</div> 
		<div class="fact_text">award winner</div>
	</div>
	<div class="fact">
		<div class="fact_number">99</div> 
		<div class="fact_text">cup of coffee</div>
	</div>
	<div class="fact">
		<div class="fact_number">24</div> 
		<div class="fact_text">members</div>
	</div>
</div>

</div>
