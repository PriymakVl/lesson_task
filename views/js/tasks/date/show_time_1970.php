<a href="<?=Yii::$app->request->referrer?>" class="btn btn-primary">Задачи урока</a>

<h1>Показать количество миллисекунд (тысячная доля секунды), прошедших с 1 января 1970</h1>
<p>Целое число, представляющее собой количество миллисекунд, прошедших с начала 1970 года, называется <i>таймстамп</i> <b>(англ. timestamp)</b>.</p>
<br>

<div id="block"></div>
<br><br>

<a href="#" onclick="showCurrentDate();">Показать</a>

<script>
	function showCurrentDate() { 
		let data = new Date();
        let timestamp = data.getTime();
        alert( timestamp ); // показывает текущие дату и время
	}
</script>