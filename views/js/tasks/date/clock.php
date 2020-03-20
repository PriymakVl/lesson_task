<?php 
	use yii\helpers\Html;
	$this->title = 'Часы';
 ?>
<?= Html::a('Задачи урока', ['lesson', 'name' => 'date'], ['class' => 'btn btn-primary']) ?>

<style type="text/css">
	.clock-wrp {
		margin-top: 100px;
		text-align: center;
	}
	#clock {
		border: 2px solid green;
		padding: 20px;
		font-size: 50px;
		font-weight: bold;
		display: inline-block;
	}
</style>

<div class="clock-wrp">
	<div id="clock"></div>
</div>


<script type="text/javascript">

function startTime() {
	var time = new Date();
	var hour = time.getHours();
	var minutes = time.getMinutes();
	var seconds = time.getSeconds();

	minutes = checkTime(minutes);
	seconds = checkTime(seconds);

	document.getElementById('clock').innerHTML = hour + ":" + minutes + ":" + seconds;

	setTimeout(startTime, 1000);
}

function checkTime(i) {
	if (i < 10) {
		i="0" + i;
	}
	return i;
}

startTime();

</script> 

