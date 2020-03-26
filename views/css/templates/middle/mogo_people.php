<?php 
	use yii\helpers\Html;
	$this->registerCssFile('/css/templates/middle_templates/mogo_people.css');
	$this->registerCssFile('https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat:300i,400,700&amp;subset=cyrillic-ext');

	$this->title = 'шаблон "Mogo People"';
	$this->params['breadcrumbs'][] = ['label' => 'CSS', 'url' => ['/css']];
	$this->params['breadcrumbs'][] = ['label' => 'Шаблоны средней сложности', 'url' => ['/css/templates/middle']];
	$this->params['breadcrumbs'][] = $this->title;
 ?>

<h1><?= $this->title ?></h1>

 <?= Html::a('Скачать задание', ['/tasks/css/templates/mogo_people_task.rar'], ['class' => 'btn btn-primary']) ?>
 <?= Html::a('Скачать решение', ['/solutions/css/templates/mogo_people_solution.rar'], ['class' => 'btn btn-primary']) ?>

<div class="window-task">
	
<!-- Mogo People -->
<section class="section">

    <div class="section__header">
        <h3 class="section__suptitle">Happy Clients</h3>
        <h2 class="section__title">What people say</h2>
    </div>

    <div class="clients">
        <div class="clients__item">
            <?= Html::img('/images/css/templates/mogo_people/1.png', ['class' => 'clients__photo']) ?>
            <div class="clients__content">
                <div class="clients__name">Matthew Dix</div>
                <div class="clients__prof">Graphic Design</div>
                <div class="clients__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</div>
            </div>
        </div>

        <div class="clients__item">
            <?= Html::img('/images/css/templates/mogo_people/2.png', ['class' => 'clients__photo']) ?>
            <div class="clients__content">
                <div class="clients__name">Nick Karvounis</div>
                <div class="clients__prof">Graphic Design</div>
                <div class="clients__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</div>
            </div>
        </div>

        <div class="clients__item">
            <?= Html::img('/images/css/templates/mogo_people/3.png', ['class' => 'clients__photo']) ?>
            <div class="clients__content">
                <div class="clients__name">Jaelynn Castillo </div>
                <div class="clients__prof">Graphic Design</div>
                <div class="clients__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</div>
            </div>
        </div>

        <div class="clients__item">
            <?= Html::img('/images/css/templates/mogo_people/4.png', ['class' => 'clients__photo']) ?>
            <div class="clients__content">
                <div class="clients__name">Mike Petrucci</div>
                <div class="clients__prof">Graphic Design</div>
                <div class="clients__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</div>
            </div>
        </div>
    </div><!-- /.clients -->
</section>


</div>
