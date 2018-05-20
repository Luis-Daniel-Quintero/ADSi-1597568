<?php

require '../src/dataSource.php';
require '../src/config.php';

use db1597568\dataSource;


$db = new dataSource($host, $user, $pass, $database, $port);

$sql = 'SELECT id, name, cedule, phone, password FROM user_data ';
$db->query($sql);
require './table.php';