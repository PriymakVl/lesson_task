<?php 
	use yii\helpers\Html;
	$this->registerCssFile('https://fonts.googleapis.com/css?family=Raleway:300,600,700&display=swap');
	$this->registerCssFile('/css/templates/easy_templates/active_box_download.css');

	$this->title = 'шаблон "Active Box Dowload"';
	$this->params['breadcrumbs'][] = ['label' => 'CSS', 'url' => ['/css']];
    $this->params['breadcrumbs'][] = ['label' => 'Легкие шаблоны', 'url' => ['/css/templates/easy']];
	$this->params['breadcrumbs'][] = $this->title;
 ?>

<h1><?= $this->title ?></h1>

 <?= Html::a('Скачать задание', ['/tasks/css/templates/active_box_download_task.rar'], ['class' => 'btn btn-primary']) ?>
 <?= Html::a('Скачать решение', ['/solutions/css/templates/active_box_download_solution.rar'], ['class' => 'btn btn-primary']) ?>

<div class="window-task">
	
<!-- Download -->
<div class="download">
    <h3 class="download__title">Are You Ready to Start? Download Now For Free!</h3>
    <p class="download__text">Fusce dapibus, tellus ac cursus commodo</p>
    <a class="btn  btn--red  btn--long" href="#">Download Here</a>
</div>

</div>
