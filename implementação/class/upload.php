<?php
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["imagem"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["imagem"]["tmp_name"]);
  if($check !== false) {
    echo "O arquivo é uma imagem - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "O arquivo não é uma imagem.";
    $uploadOk = 0;
  }
}
// Check if file already exists
if (file_exists($target_file)) {
  echo "Desculpe, o arquivo já existe.";
  $uploadOk = 0;
}
// Check file size
if ($_FILES["imagem"]["size"] > (2 * 1000 * 1000)) {
  echo "Desculpe, seu arquivo é muito grande.";
  $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
  echo "Desculpe, somente arquivos JPG, JPEG, PNG e GIF são permitidos.";
  $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Seu arquivo não foi enviado.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file)) {
    echo "O arquivo ". basename( $_FILES["imagem"]["name"]). " foi enviado.";
  } else {
    echo "Houve um erro ao enviar seu arquivo.";
  }
}
?>