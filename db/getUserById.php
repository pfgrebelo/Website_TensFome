<?php
if(empty($_SESSION['id'])){
    header('Location: ../index.php?p=404');
    exit;
}

define('_DEFVAR', 1);
include('conn.php');

$id = $_SESSION['id'];
$sql = "SELECT * FROM users WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($result->num_rows != 1) {
    header('Location: ../index.php?p=404');
    exit();
}
$conn->close();
?>