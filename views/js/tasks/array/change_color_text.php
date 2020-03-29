<?php 

	use yii\helpers\Html;
	$this->title = 'Изменение текста в динамике';
 ?>

<?= Html::a('Скачать решение', ['/solutions/js/array/change_color_text.rar'], ['class' => 'btn btn-primary']) ?>

<h1><?= $this->title ?></h1>

<style>
	p {
		margin: 50px 0 200px;
		font-size: 60px;
		text-align: center;
		font-weight: bold;
	}
	button {
		position: fixed;
		top: 70%;
		left: 50%;
		font-size: 30px;
		transform: translate(-50%, 0);
	}
</style>

<script>

let i = 0;

function changeColor() {

	let colors = ["red", "green", "blue", "gold", "coral", "pink"];

	if (i == colors.length) {
		i = 0;
	}

	document.getElementById("text").style.color = colors [i];

	i++ ;

	setTimeout(changeColor, 2000);
}
</script>


<p id='text'>Скрипт, позволяющий изменять цвет текста в динамике. </p>


<button onclick="changeColor()">Запустить скрипт</button>
