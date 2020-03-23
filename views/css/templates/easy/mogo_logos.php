<?php 
	use yii\helpers\Html;
	$this->registerCssFile('/css/templates/easy_templates/mogo_logos.css');

	$this->title = 'шаблон "Mogo Logos"';
	$this->params['breadcrumbs'][] = ['label' => 'Легкие шаблоны', 'url' => ['/css/templates/easy']];
	$this->params['breadcrumbs'][] = $this->title;
 ?>

<h1><?= $this->title ?></h1>

 <?= Html::a('Скачать задание', ['/tasks/css/templates/mogo_logos_task.rar'], ['class' => 'btn btn-primary']) ?>
 <?= Html::a('Скачать решение', ['/solutions/css/templates/mogo_logos_solution.rar'], ['class' => 'btn btn-primary']) ?>

<div class="window-task">
	
<!-- Mogo Logos -->
<div class="logo">
	<?= Html::img('/images/css/templates/mogo_logos/1.png') ?>
	<?= Html::img('/images/css/templates/mogo_logos/2.png') ?>
	<?= Html::img('/images/css/templates/mogo_logos/3.png') ?>
	<?= Html::img('/images/css/templates/mogo_logos/4.png') ?>
	<?= Html::img('/images/css/templates/mogo_logos/5.png') ?>
	<?= Html::img('/images/css/templates/mogo_logos/6.png') ?>
</div>

</div>
