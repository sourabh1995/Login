<?php


use voku\db\DB;




require ('vendor/autoload.php');

//Server Name
$serverName = 'localhost';
//Db Username
$dbuser = 'root';
//Db Password
$dbpassword = '';
//Database name
$dbname = 'users';

$db = DB::getInstance($serverName, $dbuser, $dbpassword, $dbname);


?>
