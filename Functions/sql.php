<?php

include_once __DIR__.'/../config.php';

class Sql {

    /**
     * класc для работы с бд
     */

    private $connect;

    public function __construct($serverBd,$userBd,$pwdBd,$baseBd){

        $this->connect = new mysqli($serverBd,$userBd,$pwdBd,$baseBd);
    }

    //Запрос на запись в бд без возврата
    public function sqlExec($query){

        $this->connect->query($query);
        $this->connect->close();

    }

    //Запрос с возвратом из бд
    public function sqlQuery($query){

        if ($query = $this->connect->query($query)) {

            $ret = [];
            while (NULL !== $row = $query->fetch_assoc()) {
                $ret[] = $row;
            }
            $query->free();
            $this->connect->close();

            return $ret;
        } else {
            return false;
        }

    }
}
