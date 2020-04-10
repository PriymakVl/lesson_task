<?php 
	use yii\helpers\Html;
	$this->registerCssFile('/css/templates/middle_templates/bouncy_contacts.css');
	$this->registerCssFile('/fonts/pe-icon-7-stroke/pe-icon-7-stroke/css/pe-icon-7-stroke.css');
	$this->registerCssFile('https://fonts.googleapis.com/css2?family=Open+Sans&family=Source+Sans+Pro:wght@300&display=swap');

	$this->title = 'шаблон "Bouncy Contacts"';
	$this->params['breadcrumbs'][] = ['label' => 'CSS', 'url' => ['/css']];
	$this->params['breadcrumbs'][] = ['label' => 'Шаблоны средней сложности', 'url' => ['/css/templates/middle']];
	$this->params['breadcrumbs'][] = $this->title;
 ?>

<h1><?= $this->title ?></h1>
<div class="key-points">google fonts, flexbox, scss, selector atribute, fonts icons 7-stroke</div>
<p style="text-align: center;">
	<a href="https://themes-pixeden.com/font-demos/7-stroke/" target="_blank">Архив с иконками</a>&nbsp;&nbsp;&nbsp;	
	<a href="https://themes-pixeden.com/font-demos/7-stroke/documentation.html" target="_blank">Документация по иконкам</a>
</p>
 <?= Html::a('Скачать задание', ['/tasks/css/templates/bouncy_contacts_task.rar'], ['class' => 'btn btn-primary']) ?>
 <?= Html::a('Скачать решение', ['/solutions/css/templates/bouncy_contacts_solution.rar'], ['class' => 'btn btn-primary']) ?>

<div class="window-task">
	
<!-- Bouncy Contacts -->
<div class="contacts">
		<div class="contacts__title">Contact us</div>
		<div class="contacts__subtitle">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</div>
		<div class="contacts__main">
			<div class="contacts__item">
				<div class="contacts__img">
					<?= Html::img('/images/css/templates/bouncy_contacts/email_bg.jpg') ?>
					<i class="pe-7s-mail"></i>
				</div>
				<div class="contacts__text">
					<h2>Email</h2>
					<p>hello@codecafe.com</p>
					<p>Personal@codecafe.com</p>
				</div>
			</div>
			<div class="contacts__item">
				<div class="contacts__img">
					<?= Html::img('/images/css/templates/bouncy_contacts/address_bg.jpg') ?>
					<i class="pe-7s-map-marker"></i>
				</div>
				<div class="contacts__text">
					<h2>Our office</h2>
					<p>240 Bhatikhana, 8200 Barisal</p>
					<p>Bangladesh</p>
				</div>
			</div>
			<div class="contacts__item">
				<div class="contacts__img">
					<?= Html::img('/images/css/templates/bouncy_contacts/phone_bg.jpg') ?>
					<i class="pe-7s-call"></i>
				</div>
				<div class="contacts__text">
					<h2>Phone</h2>
					<p>+00 11 66 99 66 44</p>
					<p>11 99 66 44 065</p>
				</div>
			</div>
		</div>
	</div>


</div>
