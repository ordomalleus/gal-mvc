<?php
require_once __DIR__ . '/config.php';

//require __DIR__ . '/Models/photo.php';

//$items = photoGetAll();

//include __DIR__.'/Views/photo.php';




//=========================Тест

require_once __DIR__ . '/Functions/sql.php';

$sql = new Sql($config->server, $config->user, $config->pwd, $config->bd);

$query = 'SELECT * FROM img';
var_dump($sql->sqlQuery($query));

//$sql->sqlExec("INSERT INTO img(img, altName) VALUES ('/files/galery/test3.lol','трололо3')");