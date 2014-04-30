<?php

require_once __DIR__.'/vendor/autoload.php';

$finder = new \Symfony\Component\Process\PhpExecutableFinder();
var_dump($finder->find());