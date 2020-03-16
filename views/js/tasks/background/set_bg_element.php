<style type="text/css">
	#block {
		width: 200px;
		height: 200px;
		background: red;
	}
</style>

<a href="<?=Yii::$app->request->referrer?>" class="btn btn-primary">Задачи урока</a>

<h1>Устанавливать фон блока по полученному значению</h1>
<br>

<div id="block"></div>
<br><br>

<a href="#" onclick="setBg();">Установить фон блока</a>


<script>
	function setBg() { 
        let bg = prompt('Укажите цвет фона');
		document.getElementById('block').style.backgroundColor = bg;
	}
</script>