<?php

require '../src/dataSource.php';
require '../src/config.php';

use db1597568\dataSource;

$db = new dataSource($host, $user, $pass, $database, $port);
$sql = "INSERT INTO user_data( name, cedule, phone, password) 
        VALUES('{$_POST['name']}', '{$_POST['cedule']}', '{$_POST['phone']}', '{$_POST['password']}' )";
$db->execute($sql);

header('Location: index.php');