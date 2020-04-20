<?php 
	use yii\helpers\Html;
	$this->registerCssFile('/css/templates/middle_templates/fontawesome_social_icons.css');
	$this->registerJsFile('https://kit.fontawesome.com/5f29610ead.js', ['crossorigin' => 'anonymous']);

	$this->title = 'шаблон "Fontawesome social icons"';
	$this->params['breadcrumbs'][] = ['label' => 'CSS', 'url' => ['/css']];
	$this->params['breadcrumbs'][] = ['label' => 'Шаблоны средней сложности', 'url' => ['/css/templates/middle']];
	$this->params['breadcrumbs'][] = $this->title;
 ?>

<h1><?= $this->title ?></h1>

 <?= Html::a('Скачать задание', ['/tasks/css/templates/fontawesome_social_icons_task.rar'], ['class' => 'btn btn-primary']) ?>
 <?= Html::a('Скачать решение', ['/solutions/css/templates/fontawesome_social_icons_solution.rar'], ['class' => 'btn btn-primary']) ?>

<div class="window-task">
	
<!-- Fontawesome social icons -->
<div class="social">
    <a class="social__item" href="#" target="_blank">
        <i class="fab fa-facebook-f"></i>
    </a>
    <a class="social__item" href="#" target="_blank">
        <i class="fab fa-twitter"></i>
    </a>
    <a class="social__item" href="#" target="_blank">
        <i class="fab fa-pinterest-p"></i>
    </a>
    <a class="social__item" href="#" target="_blank">
        <i class="fab fa-instagram"></i>
    </a>
</div>


</div>
