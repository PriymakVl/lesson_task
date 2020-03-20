<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            // ['label' => 'Главная', 'url' => ['/site/index']],
                ['label' => 'HTML', 'url' => ['/html/index']],
                
                [
                    'label' => 'CSS',
                    'items' => [
                        ['label' => 'Уроки', 'url' => '/css/index'],
                        '<li class="divider"></li>',
                        ['label' => 'Легкие шаблоны', 'url' => '/css/templates/easy'],
                        '<li class="divider"></li>',
                        ['label' => 'Средние шаблоны', 'url' => '/css/templates/middle'],
                        '<li class="divider"></li>',
                        ['label' => 'Тяжелые шаблоны', 'url' => '/css/templates/difficalt'],
                    ],
             
                ],

            ['label' => 'Javascript', 'url' => ['/js/index']],
            // ['label' => 'Contact', 'url' => ['/site/contact']],
            // Yii::$app->user->isGuest ? (
            //     ['label' => 'Login', 'url' => ['/site/login']]
            // ) : (
            //     '<li>'
            //     . Html::beginForm(['/site/logout'], 'post')
            //     . Html::submitButton(
            //         'Logout (' . Yii::$app->user->identity->username . ')',
            //         ['class' => 'btn btn-link logout']
            //     )
            //     . Html::endForm()
            //     . '</li>'
            // )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container-fluid">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>

        <?= Alert::widget() ?>
        
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Priymak Vladimir <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
