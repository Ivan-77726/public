<?php
// Настройка кодировки для корректного отображения кириллицы
header('Content-Type: text/html; charset=utf-8');

// Исходный ассоциативный массив из задания
$assoc_array = [
    "name" => "Мастер и Маргарита",
    "author" => "М.Булгаков",
    "year" => 1940,
    "genre" => "Мистика",
    "bestseller" => true
];

// 1. Вручную преобразуем ассоциативный массив в строку JSON (в виде JSON-объекта)
// И ключи, и строковые значения обязательно оборачиваем в двойные кавычки
$json_string = '{"name": "Мастер и Маргарита", "author": "М.Булгаков", "year": 1940, "genre": "Мистика", "bestseller": true}';

// 2. Декодируем строку JSON. Флаг true преобразует объект в ассоциативный массив PHP
$decoded_array = json_decode($json_string, true);

// 3. Выводим результат декодирования в браузер
echo "<h3>Результат декодирования в ассоциативный массив:</h3>";
echo "<pre>";
print_r($decoded_array);
echo "</pre>";

// Валидация корректности структуры JSON
if (json_last_error() === JSON_ERROR_NONE) {
    echo "<p style='color: green;'>✔ Строка JSON составлена верно и успешно декодирована в массив!</p>";
} else {
    echo "<p style='color: red;'>❌ Ошибка синтаксиса JSON: " . json_last_error_msg() . "</p>";
}
?>
