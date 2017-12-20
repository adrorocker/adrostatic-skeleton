<?php

require '../vendor/autoload.php';

use AdroStatic\AdroStatic;

$root = realpath(dirname(__DIR__));

AdroStatic::factory($root)->proxy();
