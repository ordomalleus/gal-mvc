<?php

require_once __DIR__.'/../config.php';

//клас для работы с файлами. Загружает файл в указонную папку через форму методом post
class Files {

    //путь куда будут загружены файлы
    private  $fileDir;
    //разрешенные расширения
    private  $imgSucces;

    public function __construct($dir,$imgSucces){
        $this->fileDir = $dir;
        $this->imgSucces = $imgSucces;
    }

    //Получение расширения файла
    private function getExtension($filename) {
        return end(explode(".", $filename));
    }

    //загрузка файла
    public function fileUpload($file){

        if(empty($_FILES)){
            return false;
        }

        if(0 !=$_FILES[$file]['error']){
            return false;
        }

        if (in_array($this->getExtension($_FILES[$file]['name']),$this->imgSucces) ){
            $_FILES[$file]['name'] = time().round(microtime(),4).'.'.$this->getExtension($_FILES[$file]['name']);
        } else {
            return false;
        }

        if (is_uploaded_file($_FILES[$file]['tmp_name'])){
            $uploadfile = $this->fileDir . basename($_FILES[$file]['name']);
            if (move_uploaded_file($_FILES[$file]['tmp_name'], $uploadfile)){
                return $_FILES[$file]['name'];
            } else {
                return false;
            }
        }

        return false;

    }
}





/*

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
*/