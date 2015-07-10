<?php

include_once __DIR__.'/../config.php';

class Sql {

    /**
     * клас для работы с бд
     */

    private $serverBd;
    private $userBd;
    private $pwdBd;
    private $baseBd;

    public function __construct($serverBd,$userBd,$pwdBd,$baseBd){
        $this->serverBd = $serverBd;
        $this->userBd = $userBd;
        $this->pwdBd = $pwdBd;
        $this->baseBd = $baseBd;
    }

    //подключение к базе
    public function sqlConnect(){

        mysqli_connect($this->serverBd,$this->userBd,$this->pwdBd);
        mysql_select_db($this->baseBd);

    }

    //Запрос на запись в бд без возврата
    public function sqlExec($query){

        $this->sqlConnect();
        mysql_query($query);

    }

    //Запрос с возвратом из бд
    public function sqlQuery($query){

        $this->sqlConnect();

        $res = mysql_query($query);

        $ret = [];
        while (false !== $row = mysql_fetch_assoc($res)) {
            $ret[] = $row;
        }

        return $ret;

    }
}

$sql = new Sql($config->server, $config->user, $config->pwd, $config->bd);













/*
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
*/