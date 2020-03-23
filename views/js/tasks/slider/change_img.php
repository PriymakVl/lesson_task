<?php 

	use yii\helpers\Html;
	$this->title = 'Смена большой картинки при клике по маленькой';
 ?>
<a href="/js/slider" class="btn btn-primary">Задачи урока</a>
<?= Html::a('Скачать решение', ['/solutions/js/slider/change_img.rar'], ['class' => 'btn btn-primary']) ?>

<h1><?= $this->title ?></h1>

<style>
		h1 {
			text-align:center;
		}
		
		.small-box {
			text-align: center;
			margin-bottom: 50px;
		}
		.small-box img{
			width: 150px;
			height: 150px;
			margin-right: 15px;
			border: 2px solid blue;
			padding: 5px;
		}
		
		.small-box img:hover {
			cursor: pointer;
		}
		
		.big-box {
			text-align: center;
		}
		
		.big-box img {
			border: 2px solid blue;
			padding: 20px;
		}
		
		.active {
			border-color: red!important;
		}
	</style>

<!-- Html code -->
<div class="small-box">
	<img src="/images/js/slider/change_img/car.png" onClick="changeImage(this);" class="active"/>
	<img src="/images/js/slider/change_img/dog.jpg" onClick="changeImage(this);" />
	<img src="/images/js/slider/change_img/banana.jpg" onClick="changeImage(this);" />
</div>
<div class="big-box">
	<img src="/images/js/slider/change_img/car.png" id="img_big">
</div>
	
<script>
	function changeImage(img_small) {
		let img_big = document.getElementById('img_big');
		img_big.src = img_small.src;
		
		let small_images = document.querySelectorAll('.small-box img');
		small_images.forEach(removeClassActive);
		img_small.classList.add('active');
	}
	
	function removeClassActive(item)
	{
		item.classList.remove('active');
	}
</script>