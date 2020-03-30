<?php 
	use yii\helpers\Html;
	$this->registerCssFile('/css/templates/middle_templates/mogo_card.css');

	$this->title = 'шаблон "Mogo Card"';
	$this->params['breadcrumbs'][] = ['label' => 'CSS', 'url' => ['/css']];
	$this->params['breadcrumbs'][] = ['label' => 'Шаблоны средней сложности', 'url' => ['/css/templates/middle']];
	$this->params['breadcrumbs'][] = $this->title;
 ?>

<h1><?= $this->title ?></h1>

 <?= Html::a('Скачать задание', ['/tasks/css/templates/mogo_card_task.rar'], ['class' => 'btn btn-primary']) ?>
 <?= Html::a('Скачать решение', ['/solutions/css/templates/mogo_card_solution.rar'], ['class' => 'btn btn-primary']) ?>

<div class="window-task">
	
<!-- Mogo Card -->
<div class="card">
    <div class="card__item">
        <div class="card__img">
            <?= Html::img('/images/css/templates/mogo_card/1.jpg') ?>
        </div>
    </div>
    <div class="card__item">
        <div class="card__img">
            <?= Html::img('/images/css/templates/mogo_card/2.jpg') ?>
        </div>
    </div>
</div>



</div>
