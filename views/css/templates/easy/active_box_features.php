<?php 
	use yii\helpers\Html;
	$this->registerCssFile('https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet');
	$this->registerCssFile('/css/templates/easy_templates/active_box_features_float.css');

	$this->title = 'шаблон "Active Box Features"';
	$this->params['breadcrumbs'][] = ['label' => 'Легкие шаблоны', 'url' => ['/css/templates/easy']];
	$this->params['breadcrumbs'][] = $this->title;
 ?>

<h1><?= $this->title ?></h1>

 <?= Html::a('Скачать задание', ['/tasks/css/templates/active_box_features_task.rar'], ['class' => 'btn btn-primary']) ?>
 <?= Html::a('Скачать решение', ['/solutions/css/templates/active_box_features_solution.rar'], ['class' => 'btn btn-primary']) ?>

<div class="window-task">
	
<!-- Features -->
<div class="wrp">
    <div class="features">
        <div class="features__item">
            <?= Html::img('/images/css/templates/active_box_features/feature-1.png', ['alt' => 'image', 'class' => 'features__icon']) ?>
            <h4 class="features__title">Easily Customised</h4>
            <div class="features__text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla</div>
        </div>

        <div class="features__item">
            <?= Html::img('/images/css/templates/active_box_features/feature-2.png', ['alt' => 'image', 'class' => 'features__icon']) ?>
            <h4 class="features__title">Responsive REady</h4>
            <div class="features__text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla</div>
        </div>

        <div class="features__item">
            <?= Html::img('/images/css/templates/active_box_features/feature-3.png', ['alt' => 'image', 'class' => 'features__icon']) ?>
            <h4 class="features__title">Modern Design</h4>
            <div class="features__text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla</div>
        </div>

        <div class="features__item">
            <?= Html::img('/images/css/templates/active_box_features/feature-4.png', ['alt' => 'image', 'class' => 'features__icon']) ?>
            <h4 class="features__title">Clean Code</h4>
            <div class="features__text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla</div>
        </div>

        <div class="features__item">
            <?= Html::img('/images/css/templates/active_box_features/feature-5.png', ['alt' => 'image', 'class' => 'features__icon']) ?>
            <h4 class="features__title">Ready to Ship</h4>
            <div class="features__text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla</div>
        </div>

        <div class="features__item">
            <?= Html::img('/images/css/templates/active_box_features/feature-6.png', ['alt' => 'image', 'class' => 'features__icon']) ?>
            <h4 class="features__title">Download for Free</h4>
            <div class="features__text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla</div>
        </div>
    </div><!-- /.features -->
</div><!-- /.wrp -->

</div>
