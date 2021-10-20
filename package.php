<?php

use SintezCode\MODX\Package;

$package=new Package('package.json');
$package->increaseVersion();
$package->saveTo('package.json');
