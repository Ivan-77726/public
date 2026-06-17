<?php
include 'db.php';
include 'header.php';
?>

<h1>Добро пожаловать на сайт</h1>
<p>Это главная страница проекта.</p>

<div class="card mt-4">
    <div class="card-header">
        Информация
    </div>
    <div class="card-body">
        <p>Здесь вы можете управлять пользователями через <a href="admin.php">админ-панель</a>.</p>
        <p>Всего пользователей в базе: 
            <?php
            $result = $conn->query("SELECT COUNT(*) as count FROM bd4");
            $count = $result->fetch_assoc();
            echo $count['count'];
            ?>
        </p>
    </div>
</div>

<?php include 'footer.php'; ?>