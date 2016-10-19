<?php
header("content-type:text/html; charset=utf-8");
   function cube($no){
      $result=$no*$no*$no;
      return $result;
   }

   for ( $i=100 ; $i<=999; $i++){
       $str=strval($i);
    
      $char1=substr($str,0,1);
     // echo $char1."<br>";
       $char2=substr($str,1,1);
      // echo $char2. "<br>";
       $char3=substr($str,2,1);
       //echo $char3. "<br>";
      $sum= cube ($char1)+cube ($char2)+cube ($char3);
     //echo $sum ;
      //echo gettype($i);
      
      if ($sum==$i){
         echo "$i 符合水仙花數 <br>";
      }
     
   }
      
   
?>