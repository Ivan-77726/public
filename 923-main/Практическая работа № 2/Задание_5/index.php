<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Основы программирования</h1>
	<h2>Переменные</h2>
	<hr>
	
	<?php
		// Исходная сумма в долларах
		$usd_amount = 1000;

		// Заданные курсы валют (в PHP дробная часть отделяется точкой)
		$usd_to_rub = 75.87;
		$rub_to_cny = 0.09;

		// Шаг 1: Перевод долларов в рубли
		$rub_amount = $usd_amount * $usd_to_rub;

		// Шаг 2: Перевод полученных рублей в юани
		$cny_amount = $rub_amount * $rub_to_cny;

		// Вывод результатов расчета в браузер
		echo "<p>Исходная сумма: <b>" . $usd_amount . " USD</b></p>";
		echo "<p>Сумма в рублях: <b>" . $rub_amount . " RUB</b></p>";
		echo "<p>Итоговая сумма в юанях: <b>" . $cny_amount . " CNY</b></p>";
	?>
	

</body>
</html>
