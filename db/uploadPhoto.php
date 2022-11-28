<?php
$target_dir = "../img/user/";
$target_file = $target_dir . "u".$_POST['form-id'].".png";
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(empty($_FILES["form-img"]["tmp_name"])){
  header('Location: ..index.php?p=minha-conta&r=empty');
  exit();
}
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["form-img"]["tmp_name"]);
  if($check !== false) {
    echo "Ficheiro ok - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "Ficheiro não é uma imagem.";
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
if ($_FILES["form-img"]["size"] > 5000000) {    //aceita ficheiros até 5MB
  echo "Ficheiro demasiado grande";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "São apenas permitidos ficheiros do tipo JPG, JPEG, PNG & GIF.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  header('Location: ../index.php?p=minha-conta&r=errorImg');
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["form-img"]["tmp_name"], $target_file)) {
    //echo "The file ". htmlspecialchars( basename( $_FILES["form-img"]["name"])). " has been uploaded.";
    include('updateUserPhoto.php');
    header('Location: ../index.php?p=minha-conta&r=okImg');
  } else {
    header('Location: ../index.php?p=minha-conta&r=errorImg');
  }
}
?>