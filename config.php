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
    //путь хранения файлов галереи
    'filesDir' => 'files/galery',
];

/*============================================================================*/

class Config{
    public $server;
    public $user;
    public $pwd;
    public $bd;
    public $imgSucces;
    public $filesDir;
    public function __construct($server,$user,$pwd,$bd,$imgSucces,$filesDir){
        $this->server = $server;
        $this->user = $user;
        $this->pwd = $pwd;
        $this->bd = $bd;
        $this->imgSucces = $imgSucces;
        $this->filesDir = $filesDir;
    }
}
$config = new Config(
    $conf['server'],
    $conf['user'],
    $conf['pwd'],
    $conf['bd'],
    $conf['imgSucces'],
    $conf['filesDir']
);