<?php
require_once('config.inc.php');
require_once MODX_CORE_PATH.'model/modx/modx.class.php';
require_once('vendor/autoload.php');

use SintezCode\MODX\packageBuilder;

$modxClass=MODX_BASE_CLASS?:'SintezCode\MODX\modXLocal';
$modx= new $modxClass();
$modx->initialize('mgr');
$modx->setLogLevel($modxClass::LOG_LEVEL_INFO);
$modx->setLogTarget(XPDO_CLI_MODE ? 'ECHO' : 'HTML');

require('package.php');
$builder=new packageBuilder($modx,'package.json');
$builder->build();
