<?php
include_once __DIR__.'/../config.php';
require_once __DIR__.'/../Functions/file.php';
require_once __DIR__.'/../Models/photo.php';


if (!empty($_POST)){
  $data =[];
  if(!empty($_POST['altName'])){
    $data['altName'] = $_POST['altName'];
  }
  if (!empty($_FILES)){
    $res = fileUpload('img');
    if (false !== $res){
      $data['img'] = $res;
    }
  }
  if (isset($data['altName']) && isset($data['img'])){
    //путь на главную стсраницу
    $port = $_SERVER["SERVER_PORT"];
    if ($port == 80){
      $port = '';
    }else{
      $port = ':'.$port;
    }
    $location = "http://".$_SERVER['SERVER_NAME'].$port."/".$dir;
    photoInsert($data);
    header('Location: '.$location);
  }
}
include_once __DIR__.'/../Views/formAddPhoto.php';