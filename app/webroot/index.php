<?php
define('ROOT_DIR', dirname(dirname(__DIR__)));
define('APP_DIR', ROOT_DIR . '/app');
define('VIEWS_DIR', APP_DIR . '/views');
define('DC_ACTION', 'dc_action');

$loader = require_once ROOT_DIR . '/vendor/autoload.php';
$loader->add('', APP_DIR);
$loader->add('', APP_DIR . '/controllers');
$loader->add('', APP_DIR . '/models');

Dispatcher::invoke();
