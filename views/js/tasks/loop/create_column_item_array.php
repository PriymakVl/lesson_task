<?php 

	use yii\helpers\Html;
	$this->title = 'Вывести в столбец значения массива';
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
		var cars = ["BMW", "Volvo", "Saab", "Ford", "Fiat", "Audi"];
		var text = "";
		var i;
		for (i = 0; i < cars.length; i++) {
		  text += cars[i] + "<br>";
		}

		document.getElementById("demo").innerHTML = text;
	}
</script>

<h2>значения массива "BMW, Volvo, Saab, Ford, Fiat, Audi"</h2>
<button onclick="createColumn();">Создать столбец значений массива</button>
<br><br>
<p id="demo"></p>


