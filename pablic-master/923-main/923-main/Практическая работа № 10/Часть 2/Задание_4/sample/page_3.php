<?php
session_start();

// Сохраняем данные со страницы 2
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $_SESSION['post'] = $_POST['post'] ?? '';
    $_SESSION['category'] = $_POST['category'] ?? '';
    $_SESSION['experience'] = $_POST['experience'] ?? '';
}

// Проверяем наличие всех обязательных данных
if (empty($_SESSION['surname']) || empty($_SESSION['firstname'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
    <style>
        .ad-container {
            text-align: center;
            padding: 40px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 15px;
            color: white;
            margin: 20px auto;
            max-width: 600px;
        }
        .ad-container h2 {
            font-size: 28px;
            margin-bottom: 20px;
        }
        .ad-container p {
            font-size: 18px;
            margin: 10px 0;
        }
        .btn-register {
            background: #ff6b6b;
            color: white;
            border: none;
            padding: 12px 30px;
            font-size: 18px;
            border-radius: 25px;
            cursor: pointer;
            margin-top: 20px;
        }
        .btn-register:hover {
            background: #ff4757;
        }
        footer {
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    
    <h1>Отправка данных на сервер</h1>
    <h2>Еще о формах</h2>
    <hr>
    <h2>Регистрация. Страница 3</h2>

    <!-- Рекламный блок согласно заданию -->
    <div class="ad-container">
        <h2>🔥 pechora_proger 🔥</h2>
        <p>Стань частью комьюнити лучших программистов!</p>
        <p>✔️ Ежедневные челленджи</p>
        <p>✔️ Менторство от профи</p>
        <p>✔️ Работа мечты в IT</p>
        <p>📱 Подписывайся: @pechora_proger</p>
    </div>

    <form action="server.php" method="post" style="text-align: center; margin-top: 20px;">
        <input type="submit" class="btn-register" value="Завершить регистрацию">
    </form>

</body>
</html>