<?php 
	use yii\helpers\Html;
	$this->title = 'SetTimeOut hello';
 ?>
<?= Html::a('Задачи урока', ['lesson', 'name' => 'date'], ['class' => 'btn btn-primary']) ?>
<?= Html::a('Скачать файл', ['/solutions/js/settimeout/hello.rar'], ['class' => 'btn btn-primary']) ?>

<h1>Показать c задержкой в 3 секунды модальное окно с hello</h1>


<script type="text/javascript">
	
function sayHi(name = '') {
  alert('Hello' + ' ' + name);
}

//sayHi('Dima');

//setTimeout(sayHi, 1000);
//setTimeout(sayHi, 3000, 'Maks');
</script>