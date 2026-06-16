<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Задание 2 — Вывод через функцию</title>
	<style>
		/* Добавляем простые стили, чтобы таблица выглядела аккуратно */
		table { border-collapse: collapse; width: 80%; margin-top: 20px; }
		th, td { border: 1px solid black; padding: 8px; text-align: left; }
		th { background-color: #f2f2f2; }
	</style>
</head>
<body>

	<h1>Вывод данных массива</h1>
	<h2>Использование пользовательской функции и оператора return</h2>
	<hr>

	<?php
	// Исходный массив $album
	$album = array(
		array('id_album' => '1','title' => 'The Dark Side of the Moon','date' => '1973','country' => 'Великобритания','id_team' => '2'),
		array('id_album' => '2','title' => 'Wish You Were Here','date' => '1975','country' => 'Великобритания','id_team' => '2'),
		array('id_album' => '3','title' => 'Greatest Hits','date' => '1999','country' => 'США','id_team' => '2'),
		array('id_album' => '4','title' => 'Abbey Road','date' => '1969','country' => 'Великобритания','id_team' => '3'),
		array('id_album' => '5','title' => 'A Hard Day\'s Night','date' => '1964','country' => 'Великобритания','id_team' => '3'),
		array('id_album' => '6','title' => 'Back in Black','date' => '1980','country' => 'США','id_team' => '4'),
		array('id_album' => '7','title' => 'Highway to Hell','date' => '1979','country' => 'Австралия','id_team' => '4'),
		array('id_album' => '8','title' => 'The Razors Edge','date' => '1990','country' => 'Австралия','id_team' => '4'),
		array('id_album' => '9','title' => 'Let There Be Rock','date' => '1977','country' => 'ФРГ','id_team' => '4'),
		array('id_album' => '10','title' => 'Rocks','date' => '1982','country' => 'Великобритания','id_team' => '1'),
		array('id_album' => '11','title' => 'Strange Days','date' => '1967','country' => 'США','id_team' => '0'),
		array('id_album' => '12','title' => 'L.A. Woman','date' => '1971','country' => 'США','id_team' => '0'),
		array('id_album' => '13','title' => 'Greatest Hits','date' => '1978','country' => 'США','id_team' => '3')
	);

	// Пользовательская функция для формирования таблицы
	function fnOutAlbum($arr) {
		// Создаем шапку таблицы по формату из задания
		$out = "<table>
					<thead>
						<tr>
							<th>ID</th>
							<th>Альбом</th>
							<th>Дата выпуска</th>
							<th>Страна</th>
						</tr>
					</thead>
					<tbody>";

		// Циклом приклеиваем строки с данными из массива
		foreach ($arr as $item) {
			$out .= "<tr>
						<td>" . $item['id_album'] . "</td>
						<td>" . $item['title'] . "</td>
						<td>" . $item['date'] . "</td>
						<td>" . $item['country'] . "</td>
					 </tr>";
		}

		$out .= "</tbody></table>";

		// Возвращаем всю сформированную HTML-строку через return
		return $out;
	}

	// Вызов функции и немедленный вывод в браузер через echo
	echo fnOutAlbum($album);
	?>

</body>
</html>
