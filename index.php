<?php

/*function sum ($a, $b) 

{
    return $a + $b;
} */
//echo sum(45, 45);

//echo PHP_EOL;

//$subtraction = fn (int $a, int $b) => $a - $b;

//echo $subtraction (45, 30);
//var_dump($subtraction);

//pi();


/*$calculo = fn (int $a, int $b) => $a * $b / 2; 

echo $calculo (10, 10);

pi() * 2 ** 2;




function Pitagoras(){

}*/

$delta = fn (int $a, int $b, int $c) => $b ** 2 - 4*$a*$c;

echo $delta (10, 10, 10);

