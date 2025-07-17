<?php

use HanchanDev\PhpNativeMvcTemplate\App\Router;
use HanchanDev\PhpNativeMvcTemplate\Config\Database;
use HanchanDev\PhpNativeMvcTemplate\Controller\HomeController;

require_once __DIR__ .  '/../vendor/autoload.php';

//Database::getConnection('production');

Router::add('GET', '/', HomeController::class, 'index', []);

Router::run();
