 <a href="/js" class="btn btn-primary">Уроки</a>
 <a href="<?=Yii::$app->request->referrer?>" class="btn btn-primary">Задачи урока</a>

<h1>При клике по ссылке изменить текст и цвет текста абзаца с классом demo</h1>
<br>

<p class="demo" onclick="myFunction">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>

<a href="#" onclick="changeText();">Изменить текст абзаца</a>

<script>
	function changeText() {
		let par = document.querySelector('.demo');
		par.innerText = 'Paragraph changed';
		par.style.color = 'red';
		//document.querySelector('.demo').innerHTML = '<span style="color:red;">Paragraph changed</span>';
	}
</script>