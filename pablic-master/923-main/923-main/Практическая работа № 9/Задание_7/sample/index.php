<?php
// Установка кодировки UTF-8 для корректного вывода в браузер
header('Content-Type: text/html; charset=utf-8');

echo "<h1>Решение Задания 7</h1>";

// 1 и 2. Исходный неверный JSON исправлен вручную в соответствии со стандартами
$json_corrected = '{
    "name" : "Harry Potter and the Goblet of Fire",
    "author" : "J. K. Rowling",
    "year" : 2000,
    "genre" : "Fantasy Fiction",
    "bestseller" : true
}';

// 3. Декодируем исправленную строку в ассоциативный массив (второй параметр - true)
$associative_array = json_decode($json_corrected, true);

// 4. Выводим результат декодирования в браузер
echo "<h3>Результат вывода ассоциативного массива:</h3>";
echo "<pre>";
print_r($associative_array);
echo "</pre>";

// Дополнительная проверка на успешность декодирования
if (json_last_error() === JSON_ERROR_NONE) {
    echo "<p style='color: green;'>✔ Ошибки успешно устранены! JSON-строка валидна.</p>";
} else {
    echo "<p style='color: red;'>❌ Ошибка декодирования: " . json_last_error_msg() . "</p>";
}
?>
