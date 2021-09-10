<?php 
  $a = 5;
  $b = 4;

  Echo "$a == $b : " .($a == $b);
  Echo "<br> $a != $b : " .($a != $b);
  Echo "<br> $a > $b : " .($a > $b);
  Echo "<br> ($a == $b) &&  ($a < $b) : "
             (($a == $b) && ($a > $b));

Echo "<br>($a == $b)   ($a < $b) : "
           (($a == $b) && ($a > $b));
?>