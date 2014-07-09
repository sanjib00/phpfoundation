<?php

$cars = array('toyota','sedan','honda');
$fruits = array('a'=>'apple', 'b'=>'ball');
echo $cars[0]."<br>";
echo $cars[1]."<br>";
echo $cars[2]."<br>";

for($i=0; $i< count($cars); $i++){
		echo $cars[$i]."<br/>";
}
$length = count($cars);
for($i=0;$i<$length; $i++){
	echo $cars[$i]."<br/>";
	}
	
	foreach($fruits as $value){
	
	echo $value."<br/>";
	}
	
	foreach($fruits as $key=>$value){
	echo $key.'--'$value."<br/>";
	}

?>