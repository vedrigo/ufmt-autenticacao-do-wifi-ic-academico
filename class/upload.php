<?php
//recebe o nome do input
function upload($name)
{
  $target_dir = "../uploads/";
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo(basename($_FILES[$name]["name"]), PATHINFO_EXTENSION));
  $file = time() . '.' . $imageFileType;
  $target_file = $target_dir . $file;
  $msg = '';
  // Check if image file is a actual image or fake image
  if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES[$name]["tmp_name"]);
    if ($check == false) {
      $msg = "O arquivo não é uma imagem. ";
      $uploadOk = 0;
    }
  }
  // Check if file already exists
  if (file_exists($target_file)) {
    $msg = "Desculpe, o arquivo já existe.";
    $uploadOk = 0;
  }
  // Check file size
  if ($_FILES[$name]["size"] > (2 * 1000 * 1000)) {
    $msg = "Desculpe, seu arquivo é muito grande.";
    $uploadOk = 0;
  }
  // Allow certain file formats
  if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif") {
    $msg = "Desculpe, somente arquivos JPG, JPEG, PNG e GIF são permitidos.";
    $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    $msg = "Seu arquivo não foi enviado.";
    // if everything is ok, try to upload file
  } else {

    if (move_uploaded_file($_FILES[$name]["tmp_name"], $target_file)) {
      $msg = "O arquivo " . basename($_FILES[$name]["name"]) . " foi enviado.";


      $maxDim = 1270;
      $file_name = $target_file;
      list($width, $height, $type, $attr) = getimagesize($file_name);
      if ($width > $maxDim || $height > $maxDim) {
        $target_filename = $file_name;
        $ratio = $width / $height;
        if ($ratio > 1) {
          $new_width = $maxDim;
          $new_height = $maxDim / $ratio;
        } else {
          $new_width = $maxDim * $ratio;
          $new_height = $maxDim;
        }
        $src = imagecreatefromstring(file_get_contents($file_name));
        $dst = imagecreatetruecolor($new_width, $new_height);
        imagecopyresampled($dst, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
        imagedestroy($src);
        if ($imageFileType == 'jpg') {
          imagejpeg($dst, $target_filename);
        } elseif ($imageFileType == 'jpeg') {
          imagejpeg($dst, $target_filename);
        } elseif ($imageFileType == 'png') {
          imagepng($dst, $target_filename);
        }
        imagedestroy($dst);
      }


    } else {
      $msg = "Houve um erro ao enviar seu arquivo.";
        $uploadOk = 0;
    }
  }
  return [$uploadOk, $file, $msg];
}

function delete_upload($name_file)
{

}