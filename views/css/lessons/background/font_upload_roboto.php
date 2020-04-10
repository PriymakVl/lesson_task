<?php 
	use yii\helpers\Html;

  $this->registerCssFile('/css/lessons/fonts/font_upload_roboto.css');

  $this->registerCssFile('https://fonts.googleapis.com/css?family=Roboto:400,400i&display=swap" rel="stylesheet');

	$this->title = 'Font Upload Roboto';
	$this->params['breadcrumbs'][] = ['label' => 'CSS', 'url' => ['/css']];
  $this->params['breadcrumbs'][] = ['label' => 'Уроки', 'url' => ['/css/lessons/index']];
	$this->params['breadcrumbs'][] = $this->title;
 ?>

<h1><?= $this->title ?></h1>

 <?= Html::a('Скачать материалы', ['/solutions/css/css_lessons/font_upload_roboto.rar'], ['class' => 'btn btn-primary']) ?>

<div class="window-task">
	
<!-- Font Upload Roboto -->
<div class="wrp">
  <pre>
  @font-face {
    font-family: Roboto;
    font-style: normal;
    font-weight: 400;
    src: url('../fonts/Roboto-Regular.woff');
  }

  @font-face {
    font-family: Roboto;
    font-style: italic;
    font-weight: 400;
    src: url('../fonts/Roboto-Italic.woff');
  }
  
  div {
    font-family: Roboto, Arial, sans-serif;
  }

  .cursive {
    font-style: italic;
  }
  </pre>

<div class="inner">
  <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore accusamus unde porro alias veritatis saepe voluptas consequatur iure maiores illum dolore id assumenda velit, quia quaerat earum reiciendis blanditiis, nobis.</div>
  
  <div class="cursive">Tempore iure omnis eos reprehenderit alias odit quis. Porro assumenda molestiae ex sequi at voluptatem? Fugit blanditiis ad officiis pariatur earum repudiandae ea et atque! Cum ullam ipsum, unde eius.</div>
</div>

</div>