<?php
if(empty($_POST['form-username']) || empty($_POST['form-password1']) || empty($_POST['form-password2']) || empty($_POST['form-name']) || empty($_POST['form-contact'])){
    header('Location: ../index.php?p=registo&r=empty');
    exit();
}
$username = $_POST['form-username'];
$password1 = $_POST['form-password1'];
$password2 = $_POST['form-password2'];
$name = $_POST['form-name'];
$contact = $_POST['form-contact'];
$address = $_POST['form-address'];

if($password1!=$password2){
    header('Location: ../index.php?p=registo&r=pwderror');
    exit();
}
// In the base page (directly accessed):
define('_DEFVAR', 1);
include('conn.php');

if(empty($address)){
    $sql = "INSERT INTO users (username,password,usertype_id,name,contact) VALUES ('$username',MD5('$password1'),2,'$name','$contact')";
}else{
    $sql = "INSERT INTO users (username,password,usertype_id,name,contact,address) VALUES ('$username',MD5('$password1'),2,'$name','$contact','$address')";
}


if ($conn->query($sql) === TRUE) 
    header('Location: ../index.php?p=login&r=regok');
else
    header('Location: ../index.php?p=registo&r=regerror');
$conn->close();
?>