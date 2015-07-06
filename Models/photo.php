<?php

require_once __DIR__.'/../Functions/sql.php';

//получить все фото
function photoGetAll(){
  
  $query = 'SELECT * FROM '.TABLEBD;
  return sqlQuery($query);
  
}

//добавить фото в бд
function photoInsert($data){
  
  $query = "INSERT INTO img 
          (title, path) 
          VALUES 
          ('".$data['altName']."','".$data['img']."')";
  sqlExec($query);
  
}