<?php 

	use yii\helpers\Html;
	$this->title = 'Вывести столбец цифр от 1 до 10';
 ?>

<?= Html::a('Скачать решение', ['/solutions/js/array/create_column_integer.rar'], ['class' => 'btn btn-primary']) ?>

<h1><?= $this->title ?></h1>

<style>
	p {
		font-size: 30px;
		text-align: center;
	}
</style>

<script>
function createColumn() {
	let int_str = '';
	for (var i = 1; i <= 10; i++) {
		int_str += i + '<br>';
	}
	document.getElementById("demo").innerHTML = int_str;
}
</script>

<button onclick="createColumn();">Создать столбец цифр</button>
<br><br>
<p id="demo"></p>


