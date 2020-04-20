<?php 
	use yii\helpers\Html;

	$this->registerCssFile('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
	$this->registerCssFile('/css/templates/difficult_templates/regna_menu.css');

    $this->registerJsFile('https://kit.fontawesome.com/5f29610ead.js', ['crossorigin' => 'anonymous']);
    $this->registerJsFile('@web/js/vendor/superfish.js', ['depends' => 'yii\web\YiiAsset']);
    $this->registerJsFile('@web/js/vendor/wow.js', ['depends' => 'yii\web\YiiAsset']);

$js = <<< JS
$('.menu').superfish({
    animation: {
      opacity: 'show'
    },
    speed: 400
  });
JS;

    $this->registerJs( $js, $position = yii\web\View::POS_READY, $key = null );


	$this->title = 'шаблон "Regna Menu"';
	$this->params['breadcrumbs'][] = ['label' => 'Трудные шаблоны', 'url' => ['/css/templates/difficalt']];
	$this->params['breadcrumbs'][] = $this->title;
 ?>

<h1><?= $this->title ?></h1>

 <?= Html::a('Скачать задание', ['/tasks/css/templates/regna_menu_task.rar'], ['class' => 'btn btn-primary']) ?>
 <?= Html::a('Скачать решение', ['/solutions/css/templates/regna_menu_solution.rar'], ['class' => 'btn btn-primary']) ?>

<div class="window-task">
	
<!-- Regna Menu -->
<nav class="menu-wrp">
    <ul class="menu">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#" class="arrow">Drop Down</a>
            <ul class="submenu">
                <li><a href="#">Drop Down 1</a></li>
                <li><a href="#">Drop Down 1</a></li>
                <li><a href="#">Drop Down 1</a></li>
            </ul>
        </li>
        <li><a href="#">Contact Us</a></li>
    </ul>
</nav>


</div>
