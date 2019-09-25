<?php

require_once(__DIR__ . DIRECTORY_SEPARATOR . "vendor/autoload.php");
require_once(__DIR__ . DIRECTORY_SEPARATOR . "config/bootstrap.php");

$config = require_once (__DIR__ . DIRECTORY_SEPARATOR . "config/db.php");
$app = new \app\components\App();

$app->init($config);