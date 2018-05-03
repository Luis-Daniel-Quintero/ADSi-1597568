<?php

require '../src/Calculator.php';

use calculatorPHP\Calculator;

try{
$n1 = (float) $_GET['n1'];
$n2 = (float) $_GET['n2'];
$operation =  (integer) $_GET['operation'];
$message = null;

$calc = new calculator();

$calc->setNumber1($n1);
$calc->setNumber2($n2);


if ($operation === 1)
{
    $message = 'The sum between' . '  '. $n1 . '  '. 'and' . '  '. $n2 . '  '. 'is'. '  ' . $calc->sum();
}
else if ($operation === 2)
{
    $message = 'The rest between'. '  ' . $n1 . '  '. 'and' . '  '. $n2 . '  '. 'is'. '  ' . $calc->rest();
}
else if ($operation === 3)
{
    $message = 'The mult between' . '  '. $n1 . '  '. 'and' . '  '. $n2. '  ' . 'is'. '  ' . $calc->mult();
}
else if ($operation === 4)
{
    $message = 'The div between' . '  '. $n1 . '  '. 'and'. '  ' . $n2 . '  '. 'is'. '  ' . $calc->div();
}
else if($operation === 5)
{
    $message = 'The division module between' . '  '. $n1 . '  '. 'and'. '  ' . $n2. '  ' . 'is'. '  ' . $calc->sum();
}
else if($operation === 6)
{
    $message = 'The logarithm between' . '  '. $n1 . '  '. 'is'. '  ' . $calc->log();
}
else if ($operation === 7)
{
    $message = 'The square root between'. '  '. $n1. '  '. 'is'. '  ' . $calc->squareRoot();
}
else if ($operation === 8)
{
    $message = 'The umptenth root between'. '  ' . $n1. '  ' . 'and'. '  ' . $n2 . '  '. 'is'. '  ' . $calc->umpteenthRoot();
}
else if ($operation ===9)
{
    $message = 'Number'. '  ' . $n1 . '  '. 'squared is' . '  '. $calc->elevate2();
}
else if ($operation ===10)
{
    $message = 'Number' . '  '. $n1 . '  '. 'raise to' . '  '. $n2 . '  '. $calc->raisedTo();
}
else
{
    $message = 'Error: The operation is invalid';
}

}

 catch (Exception $exc)
 {
     if($exc->getCode()=== 1 )
     {
         $message = $exc->getMessage();
     }
     else
     {
         echo 'I am sorry, we have a problem <br>';
         echo $exc->getMessage();
         echo '<br>';
         echo $exc->getTraceAsString();
     }

 }
 finally {
     if ($message !== NULL)
     {require 'index.php';}
}