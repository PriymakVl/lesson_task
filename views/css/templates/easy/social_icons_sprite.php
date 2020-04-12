<?php 
	use yii\helpers\Html;
	$this->registerCssFile('/css/templates/easy_templates/social_icons_sprite.css');

	$this->title = 'шаблон "Social Icons Sprite"';
	$this->params['breadcrumbs'][] = ['label' => 'CSS', 'url' => ['/css']];
    $this->params['breadcrumbs'][] = ['label' => 'Легкие шаблоны', 'url' => ['/css/templates/easy']];
	$this->params['breadcrumbs'][] = $this->title;
 ?>

<h1><?= $this->title ?></h1>

 <?= Html::a('Скачать задание', ['/tasks/css/templates/social_icons_sprite_task.rar'], ['class' => 'btn btn-primary']) ?>
 <?= Html::a('Скачать решение', ['/solutions/css/templates/social_icons_sprite_solution.rar'], ['class' => 'btn btn-primary']) ?>

<div class="window-task">
	
<!-- Social Icons Sprite -->
<div class="social-icons">
	<a href="#" class="vk-ico icons"></a>
	<a href="#" class="fb-ico icons"></a>
	<a href="#" class="tw-ico icons"></a>
</div>

</div>
