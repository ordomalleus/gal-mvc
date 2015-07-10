<?php
/*============================================================================*/
//конфиг базы данных
//Сервер, имя БД, пользователь, пароль, таблица с картинками
$conf = [
    //сервер базы данных
    'server' => '127.0.0.1',
    //пользователь базы данных
    'user' => 'root',
    //пароль от базы данных
    'pwd' => '',
    //имя базы данных
    'bd' => 'galery',
    //разрешенные форматы
    'imgSucces' => ['gif','png','jpg','jpeg'],
];

/*============================================================================*/

class Config{
    public $server;
    public $user;
    public $pwd;
    public $bd;
    public $imgSucces;
    public function __construct($server,$user,$pwd,$bd,$imgSucces){
        $this->server = $server;
        $this->user = $user;
        $this->pwd = $pwd;
        $this->bd = $bd;
        $this->imgSucces = $imgSucces;
    }
}
$config = new Config($conf['server'],$conf['user'],$conf['pwd'],$conf['bd'],$conf['imgSucces']);
/*============================================================================

//Конфиг фотографий
//Назваие рабочей папки
$dir = 'galery';
//разрешенный формат
$imgSucces = ['gif','png','jpg','jpeg'];
//Папка где лежат фото внутри рабочей папки
$imgDir = 'files/galery/';

/*============================================================================


$fileDir = $_SERVER['DOCUMENT_ROOT'] . '/' . $imgDir;
//define("FILEDIR", (string)$fileDir);

//define("IMGSUCCES", $imgSucces);

define("SERVERBD",     $config['sever']);
define("USERBD",     $config['user']);
define("PWDDB",     $config['pwd']);
define("BASEBD",     $config['bd']);
define("TABLEBD",     $config['tableImg']);
*/