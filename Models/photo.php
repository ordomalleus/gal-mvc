<?php

require_once __DIR__.'/../Functions/sql.php';

$modelPhoto = new Sql($config->server, $config->user, $config->pwd, $config->bd);
$modelPhotoQuery = 'SELECT * FROM img';