<?php
error_reporting(E_ALL ^ E_NOTICE);

include ('classes/db.class.php');
include ('classes/application.class.php');

$app = new Application();

include ('includes/autoload.php');
include ('includes/define.php');
include ('includes/tables.php');
include ('includes/global_functions.php');
include ('language/english.php');
 

?>