<?php
spl_autoload_extensions(".php");
spl_autoload_register();

ini_set('display_errors', true);
ini_set('error_reporting', E_ALL);

Config::initialize();

$start = new DateTime();
$start->setDate(2017, 03, 26);
$i = new Import();
$i->start($start);