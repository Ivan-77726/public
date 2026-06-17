<?php
// delete.php
include 'bd.php';

$id = $_GET['id'] ?? 0;
$stmt = $conn->prepare("DELETE FROM bd2 WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->close();
header("Location: admin.php");
exit;
?>