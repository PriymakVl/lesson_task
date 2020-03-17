<?php 

	use yii\helpers\Html;
 ?>

<?= Html::a('Задачи урока', ['lesson', 'name' => 'date'], ['class' => 'btn btn-primary']) ?>


<h1>Методы объекта Date (часы, минуты, секунды)</h1>
<p></p>
<br>


<a href="#" onclick="getHours();">Который сейчас час?</a>
<br>
<br>
<a href="#" onclick="getMinutes();">Сколько сейчас минут?</a>
<br>
<br>
<a href="#" onclick="getSeconds();">Сколько сейчас секунд?</a>
<br>
<br>
<a href="#" onclick="getFullTime();">Полное время</a>

<script>
	function getHours(fulltime = false)
	{
		let date = new Date();
		let hour = date.getHours();
		if (hour == 1) postfix = ' час';
		else if (hour == 2 || hour == 3 || hour == 4) postfix = ' часа';
		else if (hour == 22 || hour == 23 || hour == 24) postfix = ' часа';
		else  postfix = ' часов';
		if (fulltime) return hour + postfix;
		alert(hour + postfix);
	}

	function getMinutes(fulltime = false)
	{
		let date = new Date();
		let minutes = date.getMinutes();
		if (minutes == 1) postfix = ' минута';
		else if (minutes == 2 || minutes == 3 || minutes == 4) postfix = ' минуты';
		else if (minutes == 22 || minutes == 23 || minutes == 24) postfix = ' минуты';
		else if (minutes == 32 || minutes == 33 || minutes == 34) postfix = ' минуты';
		else if (minutes == 42 || minutes == 43 || minutes == 44) postfix = ' минуты';
		else if (minutes == 52 || minutes == 53 || minutes == 54) postfix = ' минуты';
		else postfix = ' минут';
		if (fulltime) return minutes + postfix;
		alert(minutes + postfix);
	}

	function getSeconds(fulltime = false)
	{
		let date = new Date();
		let seconds = date.getSeconds();
		if (seconds == 1) postfix = ' секунда';
		else if (seconds == 2 || seconds == 3 || seconds == 4) postfix = ' секунды';
		else if (seconds == 22 || seconds == 23 || seconds == 24) postfix = ' секунды';
		else if (seconds == 32 || seconds == 33 || seconds == 34) postfix = ' секунды';
		else if (seconds == 42 || seconds == 43 || seconds == 44) postfix = ' секунды';
		else if (seconds == 52 || seconds == 53 || seconds == 54) postfix = ' секунды';
		else postfix = ' секунд';
		if (fulltime) return seconds + postfix;
		alert(seconds + postfix);
	}

	function getFullTime() {
		let hour = getHours(true);
		let minutes = getMinutes(true);
		let seconds = getSeconds(true);
		alert(hour + ' ' + minutes + ' ' + seconds);
	}
</script>