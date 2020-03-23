<a href="/js/date" class="btn btn-primary">Задачи урока</a>

<h1>Поздороваться в зависимости от времени суток</h1>
<p></p>
<br>

<div id="block"></div>
<br><br>

<a href="#" onclick="getHello();">Поздороваться</a>

<script>
	function getHello() {
		var today = new Date();
		var hour = today.getHours();
		if (hour < 10) {
		  alert('Доброе утро');
		} else if (hour > 10 && hour < 18) {
		  alert('Добрый день');
		} else if (hour > 18 && hour < 22) {
		  alert('Добрый вечер');
		}
		else {
		  alert('Спокойной ночи');
		} 
	}
</script>