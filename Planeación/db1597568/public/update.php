<?php

require '../src/dataSource.php';
require '../src/config.php';

use db1597568\dataSource;

$db = new dataSource($host, $user, $pass, $database, $port);
$sql = "UPDATE user_data SET name='{$_POST['name']}', cedule='{$_POST['cedule']}', phone='{$_POST['phone']}', password='{$_POST['password']}' WHERE  id = {$_POST['id']}  ";
$db->execute($sql);

header('Location: index.php');