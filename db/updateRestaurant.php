<?php
if(empty($_POST['form-id']) || empty($_POST['form-name']) || empty($_POST['form-type'])){
    header('Location: ../index.php?p=editrestaurant&r=empty');
    exit();
}
$id = $_POST['form-id'];
$name = $_POST['form-name'];
$type = $_POST['form-type'];
$visibility = $_POST['form-visibility'];
$photo = $_FILES['form-photo'];
$menu = $_FILES['form-menu'];

// In the base page (directly accessed):
define('_DEFVAR', 1);
include('conn.php');

if(empty($_FILES["form-photo"]["tmp_name"]) && empty($_FILES["form-menu"]["tmp_name"])){
    $sql = "UPDATE restaurants SET name='$name', type='$type', visibility=$visibility WHERE id=$id";
}elseif (!empty($_FILES["form-photo"]["tmp_name"]) && empty($_FILES["form-menu"]["tmp_name"])){
    $sql = "UPDATE restaurants SET name='$name', type='$type', visibility=$visibility, photo='r$id.png' WHERE id=$id";
    include('uploadPhotoRestaurant.php');
}elseif (empty($_FILES["form-photo"]["tmp_name"]) && !empty($_FILES["form-menu"]["tmp_name"])){
    $sql = "UPDATE restaurants SET name='$name', type='$type', visibility=$visibility, menu='m$id.png' WHERE id=$id";
    include('uploadMenuRestaurant.php');
}elseif (!empty($_FILES["form-photo"]["tmp_name"]) && !empty($_FILES["form-menu"]["tmp_name"])){
    $sql = "UPDATE restaurants SET name='$name', type='$type', visibility=$visibility, photo='r$id.png', menu='m$id.png' WHERE id=$id";
    include('uploadPhotoRestaurant.php');
    include('uploadMenuRestaurant.php');
}

if ($conn->query($sql) === TRUE) 
    header('Location: ../index.php?p=administracao&r=editrestaurantok');
else
    header('Location: ../index.php?p=administracao&r=editrestauranterror');
$conn->close();
?>