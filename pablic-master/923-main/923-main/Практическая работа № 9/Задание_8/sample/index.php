<?php
header('Content-Type: text/html; charset=utf-8');

echo "<h1>Решение Задания 8</h1>";

// Точное подключение файла в текущей папке
$filePath = __DIR__ . '/team.txt';

if (file_exists($filePath)) {
    include $filePath;
} else {
    die("<p style='color: red;'>❌ Ошибка: Файл team.txt не найден по пути: $filePath</p>");
}

if (isset($team)) {
    // Декодируем строго в массив ОБЪЕКТОВ (второй параметр false)
    $decoded_objects = json_decode($team, false);

    echo "<h3>Результат декодирования в массив объектов:</h3>";
    echo "<pre>";
    print_r($decoded_objects);
    echo "</pre>";

    if (json_last_error() !== JSON_ERROR_NONE) {
        echo "<p style='color: red;'>Ошибка JSON: " . json_last_error_msg() . "</p>";
    }
} else {
    echo "<p style='color: red;'>❌ Переменная \$team не найдена в файле.</p>";
}
?>
