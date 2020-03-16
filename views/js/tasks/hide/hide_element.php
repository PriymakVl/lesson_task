 <style type="text/css">
	#block {
		width: 200px;
		height: 200px;
		background: red;
	}
</style>

<a href="<?=Yii::$app->request->referrer?>" class="btn btn-primary">Задачи урока</a>

<h1>При клике по ссылке скрывать элемент по другой показывать</h1>
<br>

<div id="block"></div>
<br><br>

<a href="#" onclick="showBlock('none');">Скрыть</a>&nbsp;&nbsp; 
<a href="#" onclick="showBlock('block');">Показать</a>

<script>
	function showBlock(value) { 
		document.getElementById('block').style.display = value;
	}
</script>