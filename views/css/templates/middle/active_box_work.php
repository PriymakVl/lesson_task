<?php 
	use yii\helpers\Html;
	$this->registerCssFile('/css/templates/middle_templates/active_box_work.css');
	$this->registerCssFile('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

	$this->title = 'шаблон "Active Box Work"';
	$this->params['breadcrumbs'][] = ['label' => 'CSS', 'url' => ['/css']];
	$this->params['breadcrumbs'][] = ['label' => 'Шаблоны средней сложности', 'url' => ['/css/templates/meddle']];
	$this->params['breadcrumbs'][] = $this->title;
 ?>

<h1><?= $this->title ?></h1>

 <?= Html::a('Скачать задание', ['/tasks/css/templates/active_box_work_task.rar'], ['class' => 'btn btn-primary']) ?>
 <?= Html::a('Скачать решение', ['/solutions/css/templates/active_box_work_solution.rar'], ['class' => 'btn btn-primary']) ?>

<div class="window-task">
	
<!-- Work -->
<a href="#" class="work">
	<?= Html::img('/images/css/templates/active_box_works/work-1.jpg', ['class' => 'work_photo']) ?>
	<div class="work__content">
		<div class="work__title">Project Name</div>
		<div class="work__text">User Interface Design</div>
	</div>
</a>

</div>
