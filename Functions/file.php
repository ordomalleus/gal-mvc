<?php

require_once __DIR__.'/../config.php';

//функция определения расширения файла
function getExtension($filename) {
  return end(explode(".", $filename));
}

//функция загрузки файла
function fileUpload($field){
  
  global $imgSucces,$fileDir,$imgDir;

  if(empty($_FILES)){
    return FALSE;
  }
  
  if(0 !=$_FILES[$field]['error']){
    return FALSE;
  }
  
  if (in_array(getExtension($_FILES[$field]['name']),$imgSucces) ){
    $_FILES[$field]['name'] = time().round(microtime(),4).'.'.getExtension($_FILES[$field]['name']);
  } else {
    return FALSE;
  }
  
  if (is_uploaded_file($_FILES[$field]['tmp_name'])){
    $uploadfile = $fileDir . basename($_FILES[$field]['name']);
    if (move_uploaded_file($_FILES[$field]['tmp_name'], $uploadfile)){
      return $imgDir.$_FILES[$field]['name'];
    } else {
      return FALSE;
    }
  }
  
  return FALSE;
}
