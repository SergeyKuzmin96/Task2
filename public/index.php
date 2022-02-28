<?php
require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';
new \task2\App();
debug(\task2\App::$app->getProperties());