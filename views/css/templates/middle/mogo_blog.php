<?php 
	use yii\helpers\Html;
	$this->registerCssFile('/css/templates/middle_templates/mogo_blog.css');
	$this->registerCssFile('https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat:300i,400,700&amp;subset=cyrillic-ext');
	$this->registerJsFile('https://kit.fontawesome.com/5f29610ead.js', ['crossorigin' => 'anonymous']);

	$this->title = 'шаблон "Mogo Blog"';
	$this->params['breadcrumbs'][] = ['label' => 'CSS', 'url' => ['/css']];
	$this->params['breadcrumbs'][] = ['label' => 'Шаблоны средней сложности', 'url' => ['/css/templates/middle']];
	$this->params['breadcrumbs'][] = $this->title;
 ?>

<h1><?= $this->title ?></h1>

 <?= Html::a('Скачать задание', ['/tasks/css/templates/mogo_blog_task.rar'], ['class' => 'btn btn-primary']) ?>
 <?= Html::a('Скачать решение', ['/solutions/css/templates/mogo_blog_solution.rar'], ['class' => 'btn btn-primary']) ?>

<div class="window-task">
	
<!-- Mogo Blog -->
<section class="section">

        <div class="section__header">
            <h3 class="section__suptitle">Our stories</h3>
            <h2 class="section__title">Latest blog</h2>
        </div>

        <div class="blog">
            <div class="blog__item">
                <div class="blog__header">
                    <a href="#">
                        <?= Html::img('/images/css/templates/mogo_blog/1.jpg', ['class' => 'blog_photo']) ?>
                    </a>
                    <div class="blog__date">
                        <div class="blog__date-day">15</div>
                        Jan
                    </div>
                </div>
                <div class="blog__content">
                    <div class="blog__title">
                        <a href="#">Lorem ipsum dolor sit amet</a>
                    </div>
                    <div class="blog__text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                </div>
                <div class="blog__footer">
                    <div class="blog-stat">
                        <span class="blog-stat__item">
                            <i class="far fa-eye"></i> 542
                        </span>
                        <span class="blog-stat__item">
                            <i class="far fa-comment-dots"></i> 17
                        </span>
                    </div>
                </div>
            </div>

            <div class="blog__item">
                <div class="blog__header">
                    <a href="#">
                        <?= Html::img('/images/css/templates/mogo_blog/2.jpg', ['class' => 'blog_photo']) ?>
                    </a>
                    <div class="blog__date">
                        <div class="blog__date-day">15</div>
                        Jan
                    </div>
                </div>
                <div class="blog__content">
                    <div class="blog__title">
                        <a href="#">Lorem ipsum dolor sit amet</a>
                    </div>
                    <div class="blog__text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                </div>
                <div class="blog__footer">
                    <div class="blog-stat">
                        <span class="blog-stat__item">
                            <i class="far fa-eye"></i> 542
                        </span>
                        <span class="blog-stat__item">
                            <i class="far fa-comment-dots"></i> 17
                        </span>
                    </div>
                </div>
            </div>

            <div class="blog__item">
                <div class="blog__header">
                    <a href="#">
                        <?= Html::img('/images/css/templates/mogo_blog/3.jpg', ['class' => 'blog_photo']) ?>
                    </a>
                    <div class="blog__date">
                        <div class="blog__date-day">15</div>
                        Jan
                    </div>
                </div>
                <div class="blog__content">
                    <div class="blog__title">
                        <a href="#">Lorem ipsum dolor sit amet</a>
                    </div>
                    <div class="blog__text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                </div>
                <div class="blog__footer">
                    <div class="blog-stat">
                        <span class="blog-stat__item">
                            <i class="fas fa-eye"></i> 542
                        </span>
                        <span class="blog-stat__item">
                            <i class="fas fa-comment-dots"></i> 17
                        </span>
                    </div>
                </div>
            </div>
        </div><!-- /.blog -->
</section>


</div>
