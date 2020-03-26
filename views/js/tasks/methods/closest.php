<?php 

	use yii\helpers\Html;
	$this->title = 'Найти родителя у элемента (смотреть в консоли)';
 ?>
<a href="/js/slider" class="btn btn-primary">Задачи урока</a>
<?= Html::a('Скачать решение', ['/solutions/js/methods/closest.rar'], ['class' => 'btn btn-primary']) ?>

<h1><?= $this->title ?></h1>
<p>Метод Element.closest() возвращает ближайший родительский элемент (или сам элемент), который соответствует заданному CSS-селектору или null, если таковых элементов вообще нет.</p>

<style>

</style>

<!-- Html code -->
<div id="block" title="Я - блок">
    <a href="#">Я ссылка в никуда</a><br>
    <a href="http://site.ru">Я ссылка на сайт</a>
    <div>
       <div id="too"></div>
    </div>
</div>
	
<script>

let div = document.querySelector("#too"); //Это элемент от которого мы начнем поиск

let parent = div.closest("#block"); //Результат - самый первый блок древа выше
parent = div.closest("div"); //Сам блок #too и будет результатом, так как он подходит под селектор "div"
parent = div.closest("a"); //null - В предках #too нет ни одного тега "a"!
parent = div.closest("div[title]") //#block - так как ближе нет блоков с атрибутом title.

console.log(parent);

</script>