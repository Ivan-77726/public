<?php
// === 1. БЛОК СЦЕНАРИЯ В НАЧАЛЕ ФАЙЛА ===
$head = '
    <meta charset="utf-8">
    <title>Группы</title>
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

// Исходный массив групп
$teams_data = array(
    array('id_team' => '1', 'name' => 'Aerosmith', 'alias' => 'aerosmith', 'country' => 'США', 'content' => '', 'date' => '1970', 'style' => 'хард-рок', 'path' => 'assets/teams/aerosmith.jpg', 'note' => ''),
    array('id_team' => '2', 'name' => 'Pink Floyd', 'alias' => 'pink-floyd', 'country' => 'Великобритания', 'content' => '', 'date' => '1965', 'style' => 'психоделический-рок', 'path' => 'assets/teams/pink_floyd.jpg', 'note' => ''),
    array('id_team' => '3', 'name' => 'The Beatles', 'alias' => 'the-beatles', 'country' => 'Великобритания', 'content' => '', 'date' => '1960', 'style' => 'рок-н-ролл', 'path' => 'assets/teams/the_beatles.jpg', 'note' => ''),
    array('id_team' => '4', 'name' => 'AC/DC', 'alias' => 'ac-dc', 'country' => 'Австралия', 'content' => '', 'date' => '1973', 'style' => 'хард-блюз-рок', 'path' => 'assets/teams/ac_dc.jpg', 'note' => ''),
    array('id_team' => '5', 'name' => 'Scorpions', 'alias' => 'scorpions', 'country' => 'ФРГ', 'content' => '', 'date' => '1965', 'style' => 'хард-рок', 'path' => 'assets/teams/scorpions.jpg', 'note' => ''),
    array('id_team' => '6', 'name' => 'Ленинград', 'alias' => 'ленинград', 'country' => 'Россия', 'content' => '', 'date' => '1997', 'style' => 'ска, фолк, панк', 'path' => 'assets/teams/leningrad.jpg', 'note' => '')
);

// Генерируем карточки в переменную $content с помощью sprintf()
$content = '';
foreach ($teams_data as $item) {
    $content .= sprintf("
    <div class='card'>
        <img src='../%s' class='teams_img'>
        <div class='card_text'>
            <h3>%s</h3>
            <p>Страна: <b>%s</b></p>
            <p>Год основания: <b>%s</b></p>
            <p>Стиль группы: <b>%s</b></p>
            <span class='td_info'>подробнее...</span>
        </div>
    </div>
    ", 
    $item['path'], 
    $item['name'], 
    $item['country'], 
    $item['date'], 
    $item['style']
    );
}

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
            <h1>Группы</h1>
            <!-- Выводим сформированные карточки -->
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
