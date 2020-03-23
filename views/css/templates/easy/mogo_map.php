<?php 
	use yii\helpers\Html;
	$this->registerCssFile('/css/templates/easy_templates/mogo_map.css');

	$this->title = 'шаблон "Mogo Map"';
	$this->params['breadcrumbs'][] = ['label' => 'Легкие шаблоны', 'url' => ['/css/templates/easy']];
	$this->params['breadcrumbs'][] = $this->title;
 ?>

<h1><?= $this->title ?></h1>

 <?= Html::a('Скачать задание', ['/tasks/css/templates/mogo_map_task.rar'], ['class' => 'btn btn-primary']) ?>
 <?= Html::a('Скачать решение', ['/solutions/css/templates/mogo_map_solution.rar'], ['class' => 'btn btn-primary']) ?>

<div class="window-task">
	
<!-- Mogo Map -->
<div class="map">
	<div class="map__inner">
		<div class="map__icon">
			<?= Html::img('/images/css/templates/mogo_map/icon.png') ?>
		</div>
		<div class="map__title">Open Map</div>
	</div>
</div>

</div>
