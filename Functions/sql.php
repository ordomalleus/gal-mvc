<?php

include_once __DIR__.'/../config.php';

class Sql {

    /**
     * класc для работы с бд
     */

    private $connect;

    public function __construct($serverBd,$userBd,$pwdBd,$baseBd){

        //$serverBd = 'p:'.$serverBd;
        $this->connect = new mysqli($serverBd,$userBd,$pwdBd,$baseBd);
    }

    //Запрос на запись в бд без возврата
    public function sqlExec($query){

        $db = $this->connect;
        $db->query($query);
        $db->close();

    }

    //Запрос с возвратом из бд
    public function sqlQuery($query){

        $db = $this->connect;
        $query = $db->query($query);

        $ret = [];
        while ( NULL !== $row = $query->fetch_assoc()) {
            $ret[] = $row;
        }
        $query->free();
        $db->close();

        return $ret;

    }
}