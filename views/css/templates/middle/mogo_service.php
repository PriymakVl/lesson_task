<?php 
	use yii\helpers\Html;
	$this->registerCssFile('/css/templates/middle_templates/mogo_service.css');
	$this->registerCssFile('https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat:400,700|Roboto&display=swap');

	$this->title = 'шаблон "Mogo Service"';
	$this->params['breadcrumbs'][] = ['label' => 'CSS', 'url' => ['/css']];
	$this->params['breadcrumbs'][] = ['label' => 'Шаблоны средней сложности', 'url' => ['/css/templates/middle']];
	$this->params['breadcrumbs'][] = $this->title;
 ?>

<h1><?= $this->title ?></h1>

 <?= Html::a('Скачать задание', ['/tasks/css/templates/mogo_service_task.rar'], ['class' => 'btn btn-primary']) ?>
 <?= Html::a('Скачать решение', ['/solutions/css/templates/mogo_service_solution.rar'], ['class' => 'btn btn-primary']) ?>

<div class="window-task">
	
<!-- Mogo Service -->
<section class="section" id="services">

        <div class="section__header">
            <h3 class="section__suptitle">We work with</h3>
            <h2 class="section__title">Amazing Services</h2>
        </div>

        <div class="services">
            <div class="services__item  services__item--border">
                <?= Html::img('/images/css/templates/mogo_service/photography.png', ['class' => 'services__icon']) ?>

                <div class="services__title">Photography</div>
                <div class="services__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
            </div>
            <div class="services__item  services__item--border">
                <?= Html::img('/images/css/templates/mogo_service/webdesign.png', ['class' => 'services__icon']) ?>


                <div class="services__title">Web Design</div>
                <div class="services__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
            </div>
            <div class="services__item  services__item--border">
                <?= Html::img('/images/css/templates/mogo_service/creativity.png', ['class' => 'services__icon']) ?>
                <div class="services__title">Creativity</div>
                <div class="services__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
            </div>
            <div class="services__item">
                <?= Html::img('/images/css/templates/mogo_service/seo.png', ['class' => 'services__icon']) ?>
                <div class="services__title">seo</div>
                <div class="services__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
            </div>
            <div class="services__item">
                <?= Html::img('/images/css/templates/mogo_service/css-html.png', ['class' => 'services__icon']) ?>
                <div class="services__title">Css/Html</div>
                <div class="services__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
            </div>
            <div class="services__item">
                <?= Html::img('/images/css/templates/mogo_service/digital.png', ['class' => 'services__icon']) ?>
                <div class="services__title">digital</div>
                <div class="services__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
            </div>
        </div>

</section>


</div>
