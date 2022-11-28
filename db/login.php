<?php
if(empty($_POST['form-username']) || empty($_POST['form-password'])){
    header('Location: ../index.php?p=login&r=empty');
    exit();
}
$username = $_POST['form-username'];
$password = $_POST['form-password'];

// In the base page (directly accessed):
define('_DEFVAR', 1);
include('conn.php');

$sql = "SELECT * FROM users WHERE username='$username' AND password=MD5('$password') AND visibility=1";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    /* LOGIN OK, UPDATE last_login */ 
    $id = $row['id'];
    $sql_update = "UPDATE users SET last_login=NOW() WHERE id=$id";
    $result_update = $conn->query($sql_update);
    /* LOGIN OK, UPDATE last_login */ 
    session_start();
    $_SESSION['id']=$row['id'];
    $_SESSION['username']=$row['username'];
    $_SESSION['type']=$row['usertype_id'];
    $_SESSION['name']=$row['name'];
    header('Location: ../index.php?p=minha-conta');
} else {
    header('Location: ../index.php?p=login&r=invalid');
}
$conn->close();
?>