<a href="<?=Yii::$app->request->referrer?>" class="btn btn-primary">Задачи урока</a>

<h1>Показать в модальном окне текущую дату и время</h1>
<br>

<div id="block"></div>
<br><br>

<a href="#" onclick="showCurrentDate();">Показать</a>

<script>
	function showCurrentDate() { 
		let now = new Date();
        alert( now ); // показывает текущие дату и время
	}
</script>