<style type="text/css">
	#block {
		width: 200px;
		height: 200px;
		background: red;
	}
</style>

<a href="<?=Yii::$app->request->referrer?>" class="btn btn-primary">Задачи урока</a>

<h1>При наведении курсора на элемент и уходе с него менять цвет элемента</h1>
<br>

<div id="block" onMouseMove="setBg('green');" onMouseOut="setBg('red');"></div>

<script>
	function setBg(color) { 
		document.getElementById('block').style.backgroundColor = color;
	}
</script>