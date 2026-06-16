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
	
	<?php
		// Вычисление выражений и вывод результатов
		echo '1) 11 + \'7\' = ', 11 + '7', '<br />';
		echo '2) \'2\' + \'5\' = ', '2' + '5', '<br />';
		echo '3) 2 + \'7 abc\' = ', 2 + '7 abc', '<br />';
		
		// В современных версиях PHP строки, не начинающиеся с чисел, могут вызывать Fatal Error при чистой арифметике,
		// поэтому для безопасности выполнения лабораторной работы обернем их в try-catch или покажем логику.
		try {
			echo '4) 2 + \'abc7\' = ', @(2 + 'abc7'), '<br />';
		} catch (TypeError $e) {
			echo '4) 2 + \'abc7\' = Ошибка TypeError (нецифровая строка)<br />';
		}

		echo '5) 1 + true + null = ', 1 + true + null, '<br />';
		echo '6) 1 + (int)\'abc7\' = ', 1 + (int)'abc7', '<br />';
		echo '7) 2 * \'7abc\' = ', 2 * '7abc', '<br />';
		echo '8) true + false + true + true = ', true + false + true + true, '<br />';

		try {
			echo '9) \'8\' / \'2\' - \'null\' = ', @('8' / '2' - 'null'), '<br />';
		} catch (TypeError $e) {
			echo '9) \'8\' / \'2\' - \'null\' = Ошибка TypeError (строка "null" не является числом)<br />';
		}

		try {
			// Знак минус в условии методички '–' заменен на стандартный дефис '-'
			echo '10) \'4.5px\' - 3 = ', @('4.5px' - 3), '<br />';
		} catch (TypeError $e) {
			echo '10) \'4.5px\' - 3 = Ошибка TypeError (строка с суффиксом)<br />';
		}
	?>

</body>
</html>
