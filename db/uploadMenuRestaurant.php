<?php
session_start();
$target_dir = "../img/menu/";
if(empty($_POST['form-id']))
  $target_file = $target_dir . "m".$id.".png";
else 
  $target_file = $target_dir . "m".$_POST['form-id'].".png";
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(empty($_FILES["form-menu"]["tmp_name"])){
  header('Location: ../index.php?p=administracao&r=empty');
  exit();
}
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["form-menu"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  /*echo "Sorry, file already exists.";
  $uploadOk = 0;*/
  unlink($target_file);
}

// Check file size
if ($_FILES["form-menu"]["size"] > 5000000) {    //aceita ficheiros até 5MB
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  header('Location: ../index.php?p=administracao&r=error');
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["form-menu"]["tmp_name"], $target_file)) {
    //echo "The file ". htmlspecialchars( basename( $_FILES["form-img"]["name"])). " has been uploaded.";
    } else {
    header('Location: ../index.php?p=administracao&r=error');  
  }
}
?>