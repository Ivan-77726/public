<?php
$head = '
    <meta charset="utf-8">
    <title>Изучаем PHP</title>
    <link rel="stylesheet" href="assets/css/style.css">
';

$header = '
    <h1>Музыкальный Сервис</h1>
';

$content = '
    <p>Содержимое главной страницы проекта.</p>
';

$footer = '
    <p>&copy; 2026 Музыкальный Сервис</p>
';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <?php echo $head; ?>
</head>

<body>
    <header>
        <div class="content">
            <?php echo $header; ?>
        </div>
    </header>

    <div class="class=main">
        <div class="content">
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
