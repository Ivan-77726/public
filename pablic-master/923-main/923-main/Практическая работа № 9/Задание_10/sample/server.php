<?php
header('Content-Type: text/html; charset=utf-8');

// Вывод заголовков согласно скриншоту примера
echo "<h1>JSON формат</h1>";
echo "<h2>Информация, полученная из строки JSON GET-параметра</h2>";

// 4. Принимаем и декодируем полученные через GET-строку данные
if (isset($_GET['data'])) {
    $received_json = $_GET['data'];
    
    // Декодируем в ассоциативный массив (второй параметр true, как на скриншоте var_dump)
    $decoded_array = json_decode($received_json, true);

    // 5. Выводим результат работы в браузер внутри тега <pre> для красивого форматирования
    echo "<pre>";
    var_dump($decoded_array);
    echo "</pre>";
} else {
    echo "<p style='color: red;'>Данные не переданы. Пожалуйста, перейдите по ссылке из главного скрипта.</p>";
}
?>
