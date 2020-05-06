<?php 
	use yii\helpers\Html;

	$this->registerCssFile('https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet');
	$this->registerCssFile('/css/templates/button_templates/workshop_button.css');

	$this->title = 'шаблон "Workshop Button"';
	$this->params['breadcrumbs'][] = ['label' => 'Кнопки', 'url' => ['/css/templates/buttons']];
	$this->params['breadcrumbs'][] = $this->title;
 ?>

<h1><?= $this->title ?></h1>

 <?= Html::a('Скачать задание', ['/tasks/css/templates/workshop_button_task.rar'], ['class' => 'btn btn-primary']) ?>
 <?= Html::a('Скачать решение', ['/solutions/css/templates/workshop_button_solution.rar'], ['class' => 'btn btn-primary']) ?>


<div class="window-task">
    <!-- Workshop Button -->
    <div class="wrp">
        <a href="#" class="btn-tickets">
            <span>Buy Tickets</span>
        </a>
    </div>
</div>
