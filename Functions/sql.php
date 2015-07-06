<?php

include_once __DIR__.'/../config.php';

//подключение к базе 
function sqlConnect(){
  
  mysql_connect(SERVERBD, USERBD, PWDDB);
  mysql_select_db(BASEBD);
  
}

//выполнение запись в бд
function sqlExec($query){
  
  sqlConnect();
  
  mysql_query($query);
  
}

//выполнение произвольного запроса в бд с возвратом
function sqlQuery($query){
  
  sqlConnect();
  
  $res = mysql_query($query);
  
  $ret = [];
  while (false !== $row = mysql_fetch_assoc($res)) {
    $ret[] = $row;
  }
  
  return $ret;
  
}