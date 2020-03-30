<?php 
	use yii\helpers\Html;
	$this->title = 'SetTimeOut hello';
 ?>
<?= Html::a('Задачи урока', ['lesson', 'name' => 'settimeout'], ['class' => 'btn btn-primary']) ?>
<?= Html::a('Скачать файл', ['/solutions/js/settimeout/hello_stop.rar'], ['class' => 'btn btn-primary']) ?>

<h1>Отмена функции setTimeout</h1>
<p>нажать отмену быстрее 3 секунд после нажатия клавиши показать</p>


<script type="text/javascript">

let = idTimer;	

function showHello() {
  idTimer = setTimeout(alert, 3000, 'Hello');
}

function removeTimer() {
	clearTimeout(idTimer);
}

</script>

<button onclick="showHello()">Показать окно</button>
<br>
<button onclick="removeTimer();">Отменить показ</button>