<?php
/*============================================================================*/
//конфиг базы данных
//Сервер, имя БД, пользователь, пароль, таблица с картинками
$config = [
    'sever' => '127.0.0.1',
    'user' => 'root',
    'pwd' => '7895123',
    'bd' => 'galerymvc',
    'tableImg' => 'img'
];

/*============================================================================*/

//Конфиг фотографий
//Назваие рабочей папки
$dir = 'galeryMvc';
//разрешенный формат
$imgSucces = ['gif','png','jpg','jpeg'];
//Папка где лежат фото внутри рабочей папки
$imgDir = 'files/galery/';

/*============================================================================*/


$fileDir = $_SERVER['DOCUMENT_ROOT'] . '/' . $dir . '/' . $imgDir;
//define("FILEDIR", (string)$fileDir);

//define("IMGSUCCES", $imgSucces);

define("SERVERBD",     $config['sever']);
define("USERBD",     $config['user']);
define("PWDDB",     $config['pwd']);
define("BASEBD",     $config['bd']);
define("TABLEBD",     $config['tableImg']);