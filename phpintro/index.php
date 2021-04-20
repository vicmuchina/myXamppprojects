<?php 
$maths=50;
$english=55;
$kiswahili=145;

$sum=$maths+$english+$kiswahili;
$average=$sum/3;

echo "Maths=$maths<br>English=$english<br>Kiswahili=$kiswahili<br><br>Average=$average<br><br>";


switch ($average) {
  case $average>=60:
    echo "You got 1st Division";
    break;
  case  $average>=50:
    echo "You got 2nd Division";
    break;
  case  $average>=35:
    echo "You got 3rd Division";
    break;
  case  $average<35:
    echo "FAILED";
    break;  
  
}
echo "<br>";

for ($y=0; $y <= 4; $y++) {  

  # code... 

for ($i=0; $i <= 4; $i++) {  

  # code... 

  echo "*"; 

} 

echo "<br>"; 
 
}
$a=7; 

$b=10; 

 echo "a=$a<br>"; 
echo "b=$b<br>"; 
$c=$a; 

$a=$b; 

$b=$c; 

  

echo "a=$a"; 

echo "<br>"; 

echo "b=$b"; 

?> 
