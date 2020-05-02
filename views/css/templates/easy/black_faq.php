<?php 
	use yii\helpers\Html;
	$this->registerCssFile('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap');
	$this->registerCssFile('/css/templates/easy_templates/black_faq.css');

	$this->title = 'шаблон "Black Faq"';
	$this->params['breadcrumbs'][] = ['label' => 'Легкие шаблоны', 'url' => ['/css/templates/easy']];
	$this->params['breadcrumbs'][] = $this->title;
 ?>

<h1><?= $this->title ?></h1>

 <?= Html::a('Скачать задание', ['/tasks/css/templates/black_faq_task.rar'], ['class' => 'btn btn-primary']) ?>
 <?= Html::a('Скачать решение', ['/solutions/css/templates/black_faq_solution.rar'], ['class' => 'btn btn-primary']) ?>

<div class="window-task">
	
	<!-- Black Faq -->
	<div class="faq">
	<div class="faq__title">FAQ</div>
	<div class="faq__content">
		<div class="faq__item">
			<h2>Can i edit the files ?</h2>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard</p>
		</div>
		<div class="faq__item">
			<h2>Is it Layered ?</h2>
			<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
		</div>
		<div class="faq__item">
			<h2>How can i edit the masks ?</h2>
			<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classica</p>
		</div>
		<div class="faq__item">
			<h2>What do i need to open the files ?</h2>
			<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
		</div>
	</div>
</div>

</div>
