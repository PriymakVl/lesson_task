<?php 
	use yii\helpers\Html;

	$this->registerCssFile('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
	$this->registerCssFile('/css/templates/navigation_templates/workshop_menu.css');

	$this->title = 'шаблон "Workshop Menu"';
	$this->params['breadcrumbs'][] = ['label' => 'Навигация', 'url' => ['/css/templates/navigation']];
	$this->params['breadcrumbs'][] = $this->title;
 ?>

<h1><?= $this->title ?></h1>

 <?= Html::a('Скачать задание', ['/tasks/css/templates/workshop_menu_task.rar'], ['class' => 'btn btn-primary']) ?>
 <?= Html::a('Скачать решение', ['/solutions/css/templates/workshop_menu_solution.rar'], ['class' => 'btn btn-primary']) ?>

<div class="window-task">
	
<!-- Workshop Menu -->
<nav class="navigation">
    <ul class="menu">
        <li class="menu__item">
            <a href="#" class="menu__link active">Home</a>
        </li>
        <li class="menu__item">
            <a href="#" class="menu__link">About us</a>
        </li>
        <li class="menu__item">
            <a href="#" class="menu__link">Speakers</a>
        </li>
        <li class="menu__item">
            <a href="#" class="menu__link">News</a>
        </li>
        <li class="menu__item">
            <a href="#" class="menu__link">Contacts</a>
        </li>
    </ul>
</nav> <!-- /.navigation -->


</div>
