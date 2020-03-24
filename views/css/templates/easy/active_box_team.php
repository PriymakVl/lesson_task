<?php 
	use yii\helpers\Html;
	$this->registerCssFile('/css/templates/easy_templates/active_box_team.css');
	$this->registerCssFile('https://fonts.googleapis.com/css?family=Raleway&display=swap');

	$this->title = 'шаблон "Active Box Team"';
	$this->params['breadcrumbs'][] = ['label' => 'CSS', 'url' => ['/css']];
	$this->params['breadcrumbs'][] = ['label' => 'Легкие шаблоны', 'url' => ['/css/templates/easy']];
	$this->params['breadcrumbs'][] = $this->title;
 ?>

<h1><?= $this->title ?></h1>

 <?= Html::a('Скачать задание', ['/tasks/css/templates/active_box_team_task.rar'], ['class' => 'btn btn-primary']) ?>
 <?= Html::a('Скачать решение', ['/solutions/css/templates/active_box_team_solution.rar'], ['class' => 'btn btn-primary']) ?>

<div class="window-task">
	
<!-- Active Box Team -->
<div class="team">
	<div class="team__inner">
	
		<div class="team__item">
			<?= Html::img('/images/css/templates/active_box_team/team-1.jpg', ['team__photo']) ?>
			<div class="team__name">Ruth Woods</div>
			<div class="team__prof">Founder, CEO</div>
			<div class="team__text">
				<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
				<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
			</div>
		</div>

		<div class="team__item">
			<?= Html::img('/images/css/templates/active_box_team/team-2.jpg', ['team__photo']) ?>
			<div class="team__name">Timothy Reed</div>
			<div class="team__prof">Co-Founder, Developer</div>
			<div class="team__text">
				<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
				<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
			</div>
		</div>

		<div class="team__item">
			<?= Html::img('/images/css/templates/active_box_team/team-3.jpg', ['team__photo']) ?>
			<div class="team__name">Victoria Valdez</div>
			<div class="team__prof">UI Designer</div>
			<div class="team__text">
				<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
				<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
			</div>
		</div>

		<div class="team__item">
			<?= Html::img('/images/css/templates/active_box_team/team-4.jpg', ['team__photo']) ?>
			<div class="team__name">Beverly Little</div>
			<div class="team__prof">Data Scientist</div>
			<div class="team__text">
				<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
				<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
			</div>
		</div>
		
	</div><!-- /.team__inner -->
</div><!-- /.team -->


</div>
