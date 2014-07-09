<?php

$x = 100 / (2*5);
$y = 100 % (2*5);
$z = 100 / 2*5;
//$a = 0/5;
//$b = 0%5;

//echo $x."<br/>";
//echo $y."<br/>";
//echo $z."<br/>";
//echo $a."<br/>";
//echo $b."<br/>";

//increment / decrement
//pre /post
//$a = 2;
//echo $a++."<br/>"; //2
//echo $a--."<br/>"; //3
//echo ++$a."<br/>"; //3
//echo --$a."<br/>"; //2
//echo $a."<br/>"; //2

//$a= $a+1;
//$a += 1;

//echo $a.PHP_EOL;

$a = 4;
$b = 2;

echo ++$a * ($a++ + --$b);

$a =3;
//$b = 0 ; // zero is false
$b = 5 ;
echo "<br/>";
if(3==$a){
	echo "Hello";
}

if(3 === $a){
	echo "Hello";

}
?>