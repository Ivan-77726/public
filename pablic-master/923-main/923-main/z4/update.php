<?php
include 'db.php';
include 'header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_user'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    
    $stmt = $conn->prepare("UPDATE bd4 SET username = ?, email = ? WHERE id = ?");
    $stmt->bind_param("ssi", $username, $email, $id);
    
    if ($stmt->execute()) {
        echo "<script>alert('Успешно!'); window.location.href='admin.php';</script>";
        exit;
    } else {
        echo "Ошибка: " . $stmt->error;
    }
    $stmt->close();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("SELECT id, username, email FROM bd4 WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $stmt->close();
}

if (!$user) {
    die("Пользователь не найден");
}
?>

<h2>Редактирование пользователя: <?= htmlspecialchars($user['username']) ?></h2>

<form method="POST">
    <input type="hidden" name="id" value="<?= $user['id'] ?>">
    
    <div class="mb-3">
        <label>Имя пользователя</label>
        <input type="text" name="username" class="form-control" value="<?= htmlspecialchars($user['username']) ?>" required>
    </div>
    
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($user['email']) ?>" required>
    </div>
    
    <button type="submit" name="update_user" class="btn btn-primary">Сохранить</button>
    <a href="admin.php" class="btn btn-secondary">Отмена</a>
</form>

<?php include 'footer.php'; ?>