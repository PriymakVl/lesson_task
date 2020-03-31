<?php 
	use yii\helpers\Html;
	$this->registerCssFile('/css/templates/middle_templates/coding_market_pricing.css');
	$this->registerCssFile('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

	$this->title = 'шаблон "Coding Market Pricing"';
	$this->params['breadcrumbs'][] = ['label' => 'CSS', 'url' => ['/css']];
	$this->params['breadcrumbs'][] = ['label' => 'Шаблоны средней сложности', 'url' => ['/css/templates/middle']];
	$this->params['breadcrumbs'][] = $this->title;
 ?>

<h1><?= $this->title ?></h1>
<div class="key-points">fontawesome, flex, google fonts, position, translate</div>

 <?= Html::a('Скачать задание', ['/tasks/css/templates/coding_market_pricing_task.rar'], ['class' => 'btn btn-primary']) ?>
 <?= Html::a('Скачать решение', ['/solutions/css/templates/coding_market_pricing_solution.rar'], ['class' => 'btn btn-primary']) ?>

<div class="window-task">
	
<!-- Coding Market Priceing -->
<div class="wrapper">
  <div class="pricing_table">
    <h1>Free</h1>
    <div class="content">
      <ul>
        <li><i class="fas fa-check"></i>5GB Disk Space</li>
        <li><i class="fas fa-check"></i>10 Domain Names</li>
        <li><i class="fas fa-check"></i>2 Email Address</li>
        <li><i class="fas fa-times"></i>50GB Monthly Bandwidth</li>
        <li><i class="fas fa-times"></i>Professional Support</li>
      </ul>
       <div class="price">
        $0
      </div>
      <div class="btn">
        <a href="#">buy</a>
      </div>
    </div>
  </div>
  <div class="pricing_table">
    <h1>Basic</h1>
    <div class="content">
      <ul>
        <li><i class="fas fa-check"></i>25GB Disk Space</li>
        <li><i class="fas fa-check"></i>20 Domain Names</li>
        <li><i class="fas fa-check"></i>50 Email Address</li>
        <li><i class="fas fa-check"></i>100GB Monthly Bandwidth</li>
        <li><i class="fas fa-times"></i>Professional Support</li>
      </ul>
      <div class="price">
        $20
      </div>
      <div class="btn">
        <a href="#">buy</a>
      </div>
    </div>
  </div>
  <div class="pricing_table">
    <h1>Pro</h1>
    <div class="content">
      <ul>
        <li><i class="fas fa-check"></i>60GB Disk Space</li>
        <li><i class="fas fa-check"></i>100 Domain Names</li>
        <li><i class="fas fa-check"></i>80 Email Address</li>
        <li><i class="fas fa-check"></i>250GB Monthly Bandwidth</li>
        <li><i class="fas fa-check"></i>Professional Support</li>
      </ul>
       <div class="price">
        $80
      </div>
      <div class="btn">
        <a href="#">buy</a>
      </div>
    </div>
  </div>
</div>	

</div>
