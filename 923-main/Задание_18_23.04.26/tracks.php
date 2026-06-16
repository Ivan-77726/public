<?php
// === 1. БЛОК СЦЕНАРИЯ В НАЧАЛЕ ФАЙЛА ===
$head = '
    <meta charset="utf-8">
    <title>Треки</title>
    <link rel="stylesheet" href="../assets/css/style.css">
';

$header = '
<div class="logo">
    <img src="../assets/logo.png" alt="logo">
    <a href="/"><h3>Музыкальный сервис</h3></a>
</div>
<nav>
    <a href="/teams">Группы</a> |
    <a href="/albums">Альбомы</a> |
    <a href="/tracks">Треки</a> |
    <a href="/admin">Консоль</a>
</nav>
';

// Исходный массив треков
$tracks_data = array(
	array('id_track' => '1','name' => 'Back in the Saddle','note' => 'Популярное','id_album' => '10'),
	array('id_track' => '2','name' => 'Last Child','note' => '','id_album' => '10'),
	array('id_track' => '3','name' => 'Rats in the Cellar','note' => 'Хит','id_album' => '10'),
	array('id_track' => '4','name' => 'Combination','note' => '','id_album' => '10')
);

// Генерируем таблицу в переменную $content строго по вашему макету
$content = "<table>
<tr>
	<th>ID трека</th>
	<th>Название песни</th>
	<th>Примечание</th>
</tr>";

foreach ($tracks_data as $track) {
    $content .= sprintf("
	<tr>
		<td>%s</td>
		<td>%s<br><span class='td_info'>подробнее...</span></td>
		<td>%s</td>
	</tr>
    ", 
    $track['id_track'], 
    $track['name'], 
    $track['note']
    );
}

$content .= "</table>";

$footer = '
<div class="block">
    <div class="logo">
        <img src="../assets/logo.png" alt="logo">
        <h2>Музыкальный сервис</h2>
    </div>
</div>
';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php echo $head; ?>
</head>
<body>
    <header>
        <div class="content ins">
            <?php echo $header; ?>
        </div>
    </header>

    <div class="main ins">
        <div class="content ins">
            <h1>Список треков</h1>
            <!-- Выводим сформированную таблицу -->
            <?php echo $content; ?>
        </div>
    </div>

    <footer>
        <div class="content">
            <?php echo $footer; ?>
        </div>
    </footer>
</body>
</html>
