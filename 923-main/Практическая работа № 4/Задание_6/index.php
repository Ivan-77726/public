<?php
require_once 'Задание_6/discography.php';

echo "<h3>Задание 6 - Вывод данных в виде таблицы:</h3>";
echo "<center><strong>Многомерные массивы</strong></center>";
echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse;'>";
echo "<tr style='background-color: #f0f0f0;'>";
echo "<th>ID</th>";
echo "<th>Название альбома</th>";
echo "<th>Дата выпуска</th>";
echo "<th>Лейбл</th>";
echo "<th>Формат</th>";
echo "<th>Статус</th>";
echo "</tr>";

foreach ($discography as $album) {
    echo "<tr>";
    echo "<td>{$album['id']}</td>";
    echo "<td>{$album['name']}</td>";
    echo "<td>{$album['date']}</td>";
    echo "<td>{$album['label']}</td>";
    echo "<td>{$album['format']}</td>";
    echo "<td>{$album['status']}</td>";
    echo "</tr>";
}
echo "</table>";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 6 - Треки (нумерованный список)</title>
</head>
<body>
    <h1>Просмотр треков сервиса</h1>
    <?php
        require 'tracks.php';
        echo "<ol>";
        foreach ($track as $item) {
            echo "<li>(id={$item['id_track']}) {$item['name']}</li>";
        }
        echo "</ol>";
    ?>
</body>
</html>