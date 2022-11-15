<?php include 'demofun.inc.php';

$obj = new dbController();
$call=$obj->dbController($array);

print_r($call);
