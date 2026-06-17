<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Отправка данных на сервер</h1>
	<h2>JSON формат</h2>
	<hr>
	<h2>Информация, полученная из строки JSON GET-параметра</h2>
	
	<?php
		// получим get араметр data, содержащий строку json
		$json = $_GET["data"];

		// декодируем строку json в ассоциативный массив
		$arr = json_decode($json, true);

		// выведем результат в браузер
		echo "<pre>";
		var_dump($arr);
	?>


</body>
</html>