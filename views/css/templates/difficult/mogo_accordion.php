<?php 
	use yii\helpers\Html;
	$this->registerCssFile('https://fonts.googleapis.com/css?family=Montserrat|Roboto:300i&display=swap');
	$this->registerCssFile('/css/templates/difficult_templates/mogo_accardion.css');

	$this->registerJsFile('/js/css/templates/mogo_accardion.js', ['depends' => 'yii\web\YiiAsset']);

	$this->title = 'шаблон "Mogo Accardion"';
	$this->params['breadcrumbs'][] = ['label' => 'Трудные шаблоны', 'url' => ['/css/templates/difficalt']];
	$this->params['breadcrumbs'][] = $this->title;
 ?>

<h1><?= $this->title ?></h1>

 <?= Html::a('Скачать задание', ['/tasks/css/templates/mogo_accardion_task.rar'], ['class' => 'btn btn-primary']) ?>
 <?= Html::a('Скачать решение', ['/solutions/css/templates/mogo_accardion_solution.rar'], ['class' => 'btn btn-primary']) ?>

<div class="window-task">
	
<!-- Mogo Accordion -->
<div class="accordion">
    <div class="accordion__item">
        <div class="accordion__header">
            <?= Html::img('/images/css/templates/mogo_accardion/photography.png', ['class' => 'accordion__icon']) ?>
            <div class="accordion__title">Photography</div>
        </div>
        <div class="accordion__content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>

    <div class="accordion__item active">
        <div class="accordion__header">
            <?= Html::img('/images/css/templates/mogo_accardion/creativity.png', ['class' => 'accordion__icon']) ?>
            <div class="accordion__title">Creativity</div>
        </div>
        <div class="accordion__content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>

    <div class="accordion__item">
        <div class="accordion__header">
            <?= Html::img('/images/css/templates/mogo_accardion/webdesign.png', ['class' => 'accordion__icon']) ?>
            <div class="accordion__title">web design</div>
        </div>
        <div class="accordion__content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
</div><!-- /.accordion -->	


</div>
