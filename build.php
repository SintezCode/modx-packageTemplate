<?php
require_once('.modx.php');
require_once('vendor/autoload.php');

use SintezCode\packageBuilder;
use SintezCode\modXLocal;

$modx= new modXLocal();
$modx->initialize('mgr');
$modx->setLogLevel(modX::LOG_LEVEL_INFO);
$modx->setLogTarget(XPDO_CLI_MODE ? 'ECHO' : 'HTML');

new packageBuilder($modx);