<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Основы программирования</h1>
	<h2>Типы данных</h2>
	<hr>
	<h2>Слабая типизация</h2>
	
	<pre>
	<?php
		$VarStr = 'Слабая типизация PHP';
		const CONSTSTR = 'Слабая типизация PHP';
		define("ARRSTR", array('Слабая типизация PHP'));

		// Используя конструкцию var_dump(), проверяем типы данных
		echo "Результат var_dump(\$VarStr):\n";
		var_dump($VarStr);

		echo "\nРезультат var_dump(CONSTSTR):\n";
		var_dump(CONSTSTR);

		echo "\nРезультат var_dump(ARRSTR):\n";
		var_dump(ARRSTR);
	?>
	</pre>

</body>
</html>
