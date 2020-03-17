<a href="<?=Yii::$app->request->referrer?>" class="btn btn-primary">Задачи урока</a>

<h1>Методы объекта Date (год, месяц, день)</h1>
<p></p>
<br>


<a href="#" onclick="getYear();">Какой сейчас год?</a>
<br>
<br>
<a href="#" onclick="getMonth();">Какой сейчас месяц?</a>
<br>
<br>
<a href="#" onclick="getDayOfMonth();">Какой сейчас день месяца?</a>

<script>
	function getYear()
	{
		let date = new Date();
		let year = date.getFullYear();
		alert(year);
	}

	function getMonth()
	{
		let date = new Date();
		// Получить месяц, от 0 до 11.
		let index = date.getMonth();
		let months = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];
		alert(months[index]);
	}

	function getDayOfMonth()
	{
		let date = new Date();
		let today = date.getDate()
		alert(today);
	}
</script>