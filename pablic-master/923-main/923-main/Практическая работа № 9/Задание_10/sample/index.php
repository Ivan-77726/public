<?php
header('Content-Type: text/html; charset=utf-8');

// 1. Подключаем файл с исходным массивом $educations
// Вы можете вынести массив в отдельный файл educations.php и подключить его:
// include 'educations.php';
// Либо использовать его прямо в текущем коде:

$educations = array (
    array (
        'id' => 5, 
        'institution' => 'Московский государственный институт электронной техники (технический университет) ', 
        'qualification' => 'Факультет инфокоммуникационных технологий', 
        'specialty' => 'Программное обеспечение радиоэлектронных систем', 
        'year_receipts' => 2005, 
        'year_release' => 2010, 
        'note' => ''
    ),
    array (
        'id' => 12, 
        'institution' => 'Санкт-Петербургский государственный университет (СПбГУ)', 
        'qualification' => 'Информационные системы и технологии', 
        'specialty' => 'Безопасность киберфизических систем', 
        'year_receipts' => 1993, 
        'year_release' => 1998, 
        'note' => ''		
    )
);

// 2. Кодируем данные массива $educations в JSON представление
// Используем флаг JSON_UNESCAPED_UNICODE, чтобы кириллица оставалась читаемой
$json_data = json_encode($educations, JSON_UNESCAPED_UNICODE);

// 3. Кодируем строку для безопасной передачи в URL и формируем ссылку
$encoded_param = urlencode($json_data);
$server_url = "server.php?data=" . $encoded_param;

echo "<h1>Отправка JSON данных</h1>";
echo "<p><a href='{$server_url}' style='font-size: 18px; color: blue; font-weight: bold;'>Передать данные на условный сервер</a></p>";
?>
