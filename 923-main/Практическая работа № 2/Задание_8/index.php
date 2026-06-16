<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>

	<h1>Основы программирования</h1>
	<h2>Константы</h2>
	<hr>
	
	<?php
		// Переносим значения переменных сценария в константу в виде ассоциативного массива
		const ALBUM_INFO = array(
			'album'  => "The Dark Side of The Moon",
			'team'   => "Pink Floyd",
			'data'   => "17 марта 1973",
			'label'  => "Harvest, Capitol, EMI",
			'format' => "LP, кассета, CD, SACD",
			'status' => "Платиновый (USA), Платиновый(GBR)"
		);

		// Пример форматированного вывода значений константы на страницу
		echo "<p><b>Группа:</b> " . ALBUM_INFO['team'] . "</p>";
		echo "<p><b>Альбом:</b> " . ALBUM_INFO['album'] . "</p>";
		echo "<p><b>Дата релиза:</b> " . ALBUM_INFO['data'] . "</p>";
		echo "<p><b>Лейбл:</b> " . ALBUM_INFO['label'] . "</p>";
		echo "<p><b>Формат:</b> " . ALBUM_INFO['format'] . "</p>";
		echo "<p><b>Статус:</b> " . ALBUM_INFO['status'] . "</p>";
	?>
		

</body>
</html>
