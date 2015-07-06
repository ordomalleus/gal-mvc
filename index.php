<?php
require_once __DIR__ . '/config.php';

require __DIR__ . '/Models/photo.php';

$items = photoGetAll();

include __DIR__.'/Views/photo.php';
