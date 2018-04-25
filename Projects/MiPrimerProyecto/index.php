<?php

require 'name.php';
require 'secondmessage.php';

use MyFirstProject\name;

$name = new name();
$name->say();

echo "<br>";
echo "<br>";
echo "<br>";

use SecondMessage\message;

$message = new message();
$message-> second();


