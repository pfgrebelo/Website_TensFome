<?php
session_start();
if(empty($_SESSION['id']) || empty($_POST['form-username']) || empty($_POST['form-name']) || empty($_POST['form-contact'])){
    header('Location: ../index.php?p=minha-conta&r=empty');
    exit();
}
$id = $_SESSION['id'];

if(!empty($_POST['form-password']))  
    $password = $_POST['form-password'];

$username = $_POST['form-username'];
$name = $_POST['form-name'];
$contact = $_POST['form-contact'];
$email = $_POST['form-email'];
$address = $_POST['form-address'];

// In the base page (directly accessed):
define('_DEFVAR', 1);
include('conn.php');

if(!empty($_POST['form-password'])){
    if(empty($address) && empty($email))  
        $sql = "UPDATE users SET username='$username', password=MD5('$password'), name='$name', contact='$contact' WHERE id=$id";
    if(empty($address) && !empty($email))
        $sql = "UPDATE users SET username='$username', password=MD5('$password'), name='$name', contact='$contact', email='$email' WHERE id=$id";
    if(!empty($address) && !empty($email))
        $sql = "UPDATE users SET username='$username', password=MD5('$password'), name='$name', contact='$contact', email='$email', address='$address' WHERE id=$id";
}else{
    if(empty($address) && empty($email)) 
        $sql = "UPDATE users SET username='$username', name='$name', contact='$contact' WHERE id=$id";
    if(empty($address) && !empty($email))
        $sql = "UPDATE users SET username='$username', name='$name', contact='$contact', email='$email' WHERE id=$id";
    if(!empty($address) && !empty($email))
        $sql = "UPDATE users SET username='$username', name='$name', contact='$contact', email='$email', address='$address' WHERE id=$id";
}
if ($conn->query($sql) === TRUE) {
    $_SESSION['username']=$username;
    header('Location: ../index.php?p=minha-conta&r=editok');
}
else
    header('Location: ../index.php?p=minha-conta&r=editerror');
$conn->close();
?>