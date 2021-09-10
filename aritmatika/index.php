<?php
$a = 5;
$b = 10;
$d = 20;
$e = 40;



echo "penambahan <br>";
$c = $a + $b;
echo "$a + $b = $c ";
echo "<hr>";

echo "pengurangan <br>";
$a = $b - $a;
echo "$b - $a = $a";
echo "<hr>";

echo "pembagian <br>";
$c = $a % $b;
echo "$a % $b = $c ";
echo "<hr>";

echo "perkalian <br>";
$c = $a * $b;
echo "$a * $b = $c ";
echo "<hr>";

echo "pemangkatan <br>";
$c = $a ** $b;
echo "$a ** $b = $b ";
echo "<hr>";

?>


<?php
  $speed = 100000;
  echo "Uang ucup = <b>$speed</b> <hr>";

  $speed -= 85000;
  echo "Jajan minum <b>$speed</b> <br>";
  
  $speed += 70000;
  echo " Sisa uang ucup jajan minum = <b>$speed</b> <hr>";

  $speed -= 60000;
  echo " Jajan sosis bakar <b>$speed</b>";

  $speed += 35000;
  echo "<br>Sisa uang ucup jajan sosis bakar + minum = <b>$speed</b><hr>";

  $speed == 25000;
  echo "Sedekah ke musafir 10% dari <b>$speed</b>";
  
  $speed %= 54000;
  echo "yaitu sebesar <b>$speed</b>";

?>