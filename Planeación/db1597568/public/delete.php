<?php

require '../src/dataSource.php';
require '../src/config.php';

use db1597568\dataSource;

$db = new dataSource($host, $user, $pass, $database, $port);
$sql = "DELETE from user_data WHERE id={$_GET['id']}";
$db->execute($sql);

header('Location: index.php');