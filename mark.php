<?php

$marks = 73;

if($marks >79) {

echo "Grade is A+";
}

else if($marks>=70 && $marks < 80){

echo "Grade is A";
}

else if($marks>=60 && $marks < 70) {

echo "Grade is A-";
}

else if($marks>=50 && $marks < 60) {

echo "Grade is B";
}

else if($marks>=40 && $marks < 50) {

echo "Grade is C";
}

else if($marks>=33 && $marks < 40) {

echo "Grade is D";
}

else if($marks < 33) {

echo "Grade is F";
}

?>