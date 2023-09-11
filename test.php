<?php

use DadanDev\IdGamaChecker\Config;
use DadanDev\IdGamaChecker\IdGameChecker;

include 'vendor/autoload.php';

$config = new Config('88d39b6d108085d87477f8e04f873d8e7cbe6d72f84ceb70d91fa4442d72c5c3','M230818RULZ1182CJ');
$config = new IdGameChecker($config);

$data = $config->checkUserFf('487361930');

var_dump($data);