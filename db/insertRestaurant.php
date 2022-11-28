<?php
if(empty($_POST['form-name']) || empty($_POST['form-type'])){
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

$sql = "INSERT INTO restaurants (name,type,visibility) VALUES ('$name','$type',$visibility)";

if ($conn->query($sql) === TRUE) 
{
    //RETORNA ID DO ULTIMO ELEMENTO INSERIDO
    $id = $conn->insert_id;

    if (!empty($_FILES["form-photo"]["tmp_name"]) && empty($_FILES["form-menu"]["tmp_name"])){
        $sql1 = "UPDATE restaurants SET photo='r$id.png' WHERE id=$id";
        $conn->query($sql1);
        include('uploadPhotoRestaurant.php');
    }elseif (empty($_FILES["form-photo"]["tmp_name"]) && !empty($_FILES["form-menu"]["tmp_name"])){
        $sql1 = "UPDATE restaurants SET menu='m$id.png' WHERE id=$id";
        $conn->query($sql1);
        include('uploadMenuRestaurant.php');
    }elseif (!empty($_FILES["form-photo"]["tmp_name"]) && !empty($_FILES["form-menu"]["tmp_name"])){
        $sql1 = "UPDATE restaurants SET photo='r$id.png', menu='m$id.png' WHERE id=$id";
        $conn->query($sql1);
        include('uploadPhotoRestaurant.php');
        include('uploadMenuRestaurant.php');
    }
    header('Location: ../index.php?p=administracao&r=newrestaurantok');
}
else
    header('Location: ../index.php?p=administracao&r=newrestauranterror');
$conn->close();
?>