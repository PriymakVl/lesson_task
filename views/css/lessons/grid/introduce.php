<?php 
	use yii\helpers\Html;
	$this->registerCssFile('https://fonts.googleapis.com/css?family=Raleway:300,600,700&display=swap');
	$this->registerCssFile('/css/templates/easy_templates/active_box_download.css');

	$this->title = 'Introduce Grid';
	$this->params['breadcrumbs'][] = ['label' => 'CSS', 'url' => ['/css']];
    $this->params['breadcrumbs'][] = ['label' => 'Уроки', 'url' => ['/css/lessons']];
    $this->params['breadcrumbs'][] = ['label' => 'Grid', 'url' => ['/css/lesson?theme=grid']];
	$this->params['breadcrumbs'][] = $this->title;
 ?>

<h1><?= $this->title ?></h1>

<div class="container">
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Для чего и когда</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">Это идеальный инструмент для создания шаблонов сайтов, форм, галерей и всего, что требует точного и отзывчивого позиционирования, основные бразуеры начали его поддержку в марте 2017 года.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Как работает</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">Grid шаблон работает по системе сеток. Grid это набор пересекающихся горизонтальных и вертикальных линий, которые создают размеры и позиционируют систему координат для контента в grid-контейнере.

Чтобы создать Grid, нужно выставить элементу display: grid. Это автоматически сделает всех прямых потомков этого элемента — grid элементами. </div>
      </div>
    </div>
  </div> 
</div>
