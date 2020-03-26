<?php 

	use yii\helpers\Html;
	$this->title = 'При клике по кнопке квадрат менять на круг и наоборот';
 ?>
<a href="/js/slider" class="btn btn-primary">Задачи урока</a>
<?= Html::a('Скачать решение', ['/solutions/js/class/change_class.rar'], ['class' => 'btn btn-primary']) ?>

<h1><?= $this->title ?></h1>

<style>
.wrp {
	width: 100%;
	text-align: center;
}

#block {
	width: 100px;
	height: 100px;	
	margin: 100px auto;
}

.cicle {
	background: red;	
	border-radius: 50%;
}

.square {	
	background: green;	
	border-radius: 0;
}
</style>


<div class="wrp">
	<div id="block" class='cicle'></div>
	<input type="button" value="изменить" onclick='changeElement();'>
</div>

<script>
//1 вариант
// function changeElement() {
// 	let elem = document.getElementById('block');
// 	let classElem = elem.getAttribute('class');

// 	if(classElem == 'square') {
// 		elem.classList.remove('square');
// 		elem.classList.add('cicle');
// 	}
// 	else {
// 		elem.classList.remove('cicle');
// 		elem.classList.add('square');
// 	}
// }
		
//2 вариант
// function changeElement() {
// 	elem.classList.toggle('cicle');
// 	elem.classList.toggle('square');
// }

//3 вариант
function changeElement() {
	let elem = document.getElementById('block');

	if(elem.classList.contains('square')) {
		elem.classList.remove('square');
		elem.classList.add('cicle');
	}
	else {
		elem.classList.remove('cicle');
		elem.classList.add('square');
	}
}
</script>
