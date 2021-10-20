<?php

use SintezCode\MODX\Package;

$package=new Package('package.json');
$package->setDir('package');
$package->setName('packageTemplate');
$package->increaseVersion();
$package->saveTo('package.json');
