<?php
//VALIDAR SE CAMPOS FORAM PASSADOS
if(empty($_POST['form-id']) || empty($_FILES['form-img'])) {
    header('Location:../index.php?p=404');
    exit();
}

//LER PARA VARIÁVEIS
$id = $_POST['form-id'];
define('_DEFVAR', 1);
include('conn.php');

$sql = "UPDATE users SET photo='u$id.png' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location:../index.php?p=minha-conta&r=updateok');
} else {
    header('Location:../index.php?p=minha-conta&r=updateerror');
}

$conn->close();
?>