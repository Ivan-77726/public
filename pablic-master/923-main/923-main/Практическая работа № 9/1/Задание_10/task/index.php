<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Отправка данных на сервер</h1>
	<h2>JSON формат</h2>
		
	<?php
		// инициализация массива
		require "educations.php";

		// кодирование массива для передачи 
		$get = json_encode($educations);
		
		// вывод ссылку с get-параметром data		
		echo "<a href='server.php?data=" . $get . "'>Вперед</a>";
		
		// echo "<pre>";
		// print_r($get);
	?> 
	

</body>
</html>