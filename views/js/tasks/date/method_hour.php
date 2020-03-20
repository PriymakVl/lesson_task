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
		else if (hour > 1 && hour < 5) postfix = ' часа';
		else if (hour > 21 || hour < 25) postfix = ' часа';
		else  postfix = ' часов';
		if (fulltime) return hour + postfix;
		alert(hour + postfix);
	}

	function getMinutes(fulltime = false)
	{
		let date = new Date();
		let minutes = date.getMinutes();
		if (minutes == 1) postfix = ' минута';
		else if (minutes > 1 && minutes < 5) postfix = ' минуты';
		else if (minutes > 21 && minutes < 25) postfix = ' минуты';
		else if (minutes > 31 && minutes < 35) postfix = ' минуты';
		else if (minutes > 41 && minutes < 45) postfix = ' минуты';
		else if (minutes > 51 && minutes < 55) postfix = ' минуты';
		else postfix = ' минут';
		if (fulltime) return minutes + postfix;
		alert(minutes + postfix);
	}

	function getSeconds(fulltime = false)
	{
		let date = new Date();
		let seconds = date.getSeconds();
		if (seconds == 1) postfix = ' секунда';
		else if (seconds > 2 && seconds < 5) postfix = ' секунды';
		else if (seconds > 21 && seconds < 25) postfix = ' секунды';
		else if (seconds > 31 && seconds < 35) postfix = ' секунды';
		else if (seconds > 41 && seconds < 45) postfix = ' секунды';
		else if (seconds > 51 && seconds < 55) postfix = ' секунды';
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