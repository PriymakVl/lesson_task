<?php 

	use yii\helpers\Html;
 ?>

 <a href="/js" class="btn btn-primary">Уроки</a>

<h1>Задачи для урока Строка (string)</h1>
<br><br>

<style>
	li {
		font-size: 18px;
		margin-bottom: 10px;
	}
</style>

<ol>
	<li>
		The <a target="_blank" href="https://www.w3schools.com/js/tryit.asp?filename=tryjs_string_length">length</a> property returns the length of a string.
	</li>
	<li>
		The <a target="_blank" href="https://www.w3schools.com/js/tryit.asp?filename=tryjs_string_indexof">indexOf()</a> method returns the index of (the position of) the first occurrence of a specified text in a string.
	</li>
	<li>
		The <a target="_blank" href="https://www.w3schools.com/js/tryit.asp?filename=tryjs_string_substring">substring()</a> extracts a part of a string and returns the extracted part in a new string. If you omit the second parameter, the method will slice out the rest of the string:
	</li>
	<li>
		The <a target="_blank" href="https://www.w3schools.com/js/tryit.asp?filename=tryjs_string_substr">substr()</a> The difference is that the second parameter specifies the length of the extracted part.
	</li>
	<li>
		The <a target="_blank" href="https://www.w3schools.com/js/tryit.asp?filename=tryjs_string_replace_global">replace()</a> method replaces a specified value with another value in a string. 
			<ol>
				<li>The replace() method does not change the string it is called on. It returns a new string.</li>
				<li>By default, the replace() method replaces only the first match.</li>
				<li>By default, the replace() method is case sensitive. Writing MICROSOFT (with upper-case) will not work.</li>
			</ol>
	</li> 
</ol>