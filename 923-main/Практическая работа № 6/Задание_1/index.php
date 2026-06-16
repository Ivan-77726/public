<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>

	<h1>Управляющие конструкции</h1>
	<h2>Циклы</h2>
	<hr>
	<h2>Просмотр треков сервиса:</h2>

	<ol>
	<?php
		// Ваш массив данных, идущий к заданию
		$team = array(
		  array('id_team' => '1','name' => 'Aerosmith','country' => 'США','date' => '1970','style' => 'хард-рок'),
		  array('id_team' => '2','name' => 'Pink Floyd','country' => 'Великобритания','date' => '1965','style' => 'психоделический-рок'),
		  array('id_team' => '3','name' => 'The Beatles','country' => 'Великобритания','date' => '1960','style' => 'рок-н-ролл'),
		  array('id_team' => '4','name' => 'AC/DC','country' => 'Австралия','date' => '1973','style' => 'хард-блюз-рок'),
		  array('id_team' => '5','name' => 'Scorpions','country' => 'ФРГ','date' => '1965','style' => 'хард-рок'),
		  array('id_team' => '6','name' => 'Ленинград','country' => 'Россия','date' => '1997','style' => 'ска, фолк, панк')
		);
		
		// Обход массива циклом foreach
		foreach ($team as $item) {
			// Вывод строк внутри тегов <li> для формирования автоматической нумерации
			echo "<li>(id=" . $item['id_team'] . ") " . $item['name'] . "</li>";
		}	
	?>
	</ol>

</body>
</html>
