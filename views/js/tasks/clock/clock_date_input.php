<?php 
	use yii\helpers\Html;
	$this->title = 'Часы с датой в поле формы';
 ?>
<?= Html::a('Задачи урока', ['lesson', 'name' => 'clock'], ['class' => 'btn btn-primary']) ?>

<style>

form {
	text-align: center;
}

input {
	height: 60px;
	width: 360px;
	font-size: 36px;
	padding: 0 10px 0 10px;
}

</style>

<!-- Html code -->
<h1><?= $this->title ?></h1>
<div class="window-task">
	<form name=clock>
		<input type=text name=full id="foo">
	</form>
</div>

<!-- Javascript -->
<script>

function fulltime() {
	var time = new Date();
	document.clock.full.value = time.toLocaleString();
	setTimeout(fulltime, 500)
}

fulltime();

</script>

