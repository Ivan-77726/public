<?php
require_once 'config.php';
include 'header.php';

$sql = "SELECT id, username, email, created_at FROM bd3 ";
$result = $conn->query($sql);
?>

<h2>Управление пользователями</h2>

<?php if (isset($_GET['message'])): ?>
    <div class="alert alert-success">Пользователь успешно удален!</div>
<?php elseif (isset($_GET['error'])): ?>
    <div class="alert alert-danger">Ошибка при удалении пользователя!</div>
<?php endif; ?>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Имя пользователя</th>
            <th>Email</th>
            <th>Дата регистрации</th>
            <th>Действия</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($result && $result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= htmlspecialchars($row['username']) ?></td>
                    <td><?= htmlspecialchars($row['email']) ?></td>
                    <td><?= $row['created_at'] ?></td>
                    <td>
                        <a href="delete.php?id=<?= $row['id'] ?>" 
                           class="btn btn-danger btn-sm" 
                           onclick="return confirm('Вы уверены?');">
                            Удалить
                        </a>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="5" class="text-center">Пользователи не найдены</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?php include 'footer.php'; ?>
<?php $conn->close(); ?>