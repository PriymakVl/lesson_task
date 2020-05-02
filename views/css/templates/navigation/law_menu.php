<?php 
	use yii\helpers\Html;

	$this->registerCssFile('/fonts/novecento/novecento-font.css');
	$this->registerCssFile('/css/templates/navigation_templates/law_menu.css');


	$this->title = 'шаблон "Law Menu"';
	$this->params['breadcrumbs'][] = ['label' => 'Навигация', 'url' => ['/css/templates/navigation']];
	$this->params['breadcrumbs'][] = $this->title;
 ?>

<h1><?= $this->title ?></h1>

 <?= Html::a('Скачать задание', ['/tasks/css/templates/law_menu_task.rar'], ['class' => 'btn btn-primary']) ?>
 <?= Html::a('Скачать решение', ['/solutions/css/templates/law_menu_solution.rar'], ['class' => 'btn btn-primary']) ?>

<div class="window-task">
	
<!-- Law Menu -->
<header class="header">
    <div class="container header-inner">
        <a href="#" class="branding-wrp">
            <!-- <img class="logo" src="img/logo.png" alt="logo"> -->
            <?= Html::img('/images/css/templates/law_menu/logo.png', ['class' => 'logo']) ?>
            <div class="branding">
                <h1 class="site-title">Company name</h1>
                <div class="site-description">Tagline goes here</div>
            </div>
        </a>    
        <nav class="menu-nav">
            <ul class="menu">
                <li class="menu__item">
                    <a class="menu__link active" href="#">HOme</a>
                </li>
                <li class="menu__item">
                    <a class="menu__link" href="#">Experience</a>
                </li>
                <li class="menu__item">
                    <a class="menu__link" href="#">About us</a>
                </li>
                <li class="menu__item">
                    <a class="menu__link" href="#">Service</a>
                </li>
                <li class="menu__item">
                    <a class="menu__link" href="#">Home</a>
                </li>
                <li class="menu__item">
                    <a class="menu__link" href="#">Contact</a>
                </li>
            </ul>
        </nav>
    </div>
</header> <!-- /.header -->

</div>
