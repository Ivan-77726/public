<?php
$user = [
    'surname' => 'Лаврецкая',
    'name' => 'Елизавета',
    'patronymic' => 'Викторовна',
    'login' => 'elizaveta',
    'password' => '12345',
    'email' => 'lovel@mail.ru'
];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
</head>
<body>

<h2>Вы успешно зарегистрированы на сайте</h2>

<p>
    <?php echo $user['surname'] . ' ' . $user['name'] . ' ' . $user['patronymic']; ?>
</p>

<p>
    Логин: <?php echo $user['login']; ?>
</p>

<p>
    E-mail: <?php echo $user['email']; ?>
</p>

<p>
    Пароль: <?php echo $user['password']; ?>
</p>

</body>
</html>