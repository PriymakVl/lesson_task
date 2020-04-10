<?php 
	use yii\helpers\Html;
    $this->registerCssFile('/css/templates/easy_templates/change_background.css');

	$this->title = 'шаблон "Change Background"';
	$this->params['breadcrumbs'][] = ['label' => 'Легкие шаблоны', 'url' => ['/css/templates/easy']];
	$this->params['breadcrumbs'][] = $this->title;
 ?>

<h1><?= $this->title ?></h1>
<div class="key-points">transition, position, overflow</div>

 <?= Html::a('Скачать задание', ['/tasks/css/templates/change_background_task.rar'], ['class' => 'btn btn-primary']) ?>
 <?= Html::a('Скачать решение', ['/solutions/css/templates/change_background_solution.rar'], ['class' => 'btn btn-primary']) ?>

<div class="window-task">
	
<!-- Change Background -->
<div class="wrapper">
    <div class="red"></div>
    <div class="blue"></div>
</div>

</div>
