<?php 
	use yii\helpers\Html;
	// $this->registerCssFile('/css/templates/easy_templates/active_box_download.css');

	$this->title = 'Colums Three';
	$this->params['breadcrumbs'][] = ['label' => 'CSS', 'url' => ['/css']];
    $this->params['breadcrumbs'][] = ['label' => 'Уроки', 'url' => ['/css/lessons/index']];
	$this->params['breadcrumbs'][] = $this->title;
 ?>

<h1><?= $this->title ?></h1>

 <?= Html::a('Скачать материалы', ['/solutions/css/lessons/grid_colums_three.rar'], ['class' => 'btn btn-primary']) ?>

<div class="window-task">
	
<!-- Colums Three -->
<style>
#grid { 
  display: grid;
  grid-template-rows: 1fr 1fr 1fr;
  grid-template-columns: 1fr 2fr 1fr;
  grid-gap: 2vw;
  }
#grid > div {
  font-size: 5vw;
  padding: .5em;
  background: gold;
  text-align: center;
}
</style>

<div id="grid">
  <div>1</div>
  <div>2</div>
  <div>3</div>
  <div>4</div>
  <div>5</div>
  <div>6</div>
  <div>7</div>
  <div>8</div>
  <div>9</div>
</div>


</div>
