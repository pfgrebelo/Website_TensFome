<?php
if(!isset($_GET['id']) || !isset($_GET['v'])){
    header('Location: ../index.php?p=administracao&r=empty');
    exit();
}
$id = $_GET['id'];
$v = $_GET['v'];
// In the base page (directly accessed):
define('_DEFVAR', 1);
include('conn.php');

$sql = "UPDATE users SET usertype_id=$v WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: ../index.php?p=administracao&r=ok');
}
else
    header('Location: ../index.php?p=administracao&r=error');
$conn->close();
?>