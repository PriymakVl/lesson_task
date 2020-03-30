<?php 
	use yii\helpers\Html;
	$this->registerCssFile('/css/templates/easy_templates/vegie_offers.css');
	$this->registerCssFile('https://fonts.googleapis.com/css?family=Merriweather:300,700&display=');

	$this->title = 'шаблон "Vegie Offers "';
	$this->params['breadcrumbs'][] = ['label' => 'Легкие шаблоны', 'url' => ['/css/templates/easy']];
	$this->params['breadcrumbs'][] = $this->title;
 ?>

<h1><?= $this->title ?></h1>
<p>backround repeat, font-family</p>

 <?= Html::a('Скачать задание', ['/tasks/css/templates/vegie_offers_task.rar'], ['class' => 'btn btn-primary']) ?>
 <?= Html::a('Скачать решение', ['/solutions/css/templates/vegie_offers_solution.rar'], ['class' => 'btn btn-primary']) ?>
<div class="window-task">
	
<!-- Vegie Offers -->
<div class="offers">
	<div class="offer">
		<?= Html::img('/images/css/templates/vegie_offers/noodle.png', ['class' => 'offer__ico']) ?>
		<h2 class="offer__title">Turnip greens</h2>
		<div class="offer__text">Lorem ipsum dolor sit amet, consectetur adipisc 
Pellentesque vel enim a elit viverra elementuma.
Aliquam erat volutpat. </div>
	</div>
	<div class="offer">
		<?= Html::img('/images/css/templates/vegie_offers/tea.png', ['class' => 'offer__ico']) ?>
		<h2 class="offer__title">Beetroot water</h2>
		<div class="offer__text">Lorem ipsum dolor sit amet, consectetur adipisc 
Pellentesque vel enim a elit viverra elementuma.
Aliquam erat volutpat. </div>
	</div>
	<div class="offer">
		<?= Html::img('/images/css/templates/vegie_offers/sweet.png', ['class' => 'offer__ico']) ?>
		<h2 class="offer__title">GET SOCIAL</h2>
		<div class="offer__text">Lorem ipsum dolor sit amet, consectetur adipisc 
Pellentesque vel enim a elit viverra elementuma.
Aliquam erat volutpat. </div>
	</div>
</div> <!-- /.offers -->

</div>
