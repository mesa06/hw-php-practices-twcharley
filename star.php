<?php
   $char="*";
   $row=5;
      for($i=1;$i<=$row;$i++){
         for($s=1;$s<=$row-$i;$s++){
            echo"&nbsp";
         }
            for($j=1;$j<=(2*$i-1);$j++){
               echo $char;
            }
         echo "<br>";
      }

?>

