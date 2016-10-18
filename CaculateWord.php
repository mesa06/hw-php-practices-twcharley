<?php 
   $string=$_POST["string"];
   if($_POST["btnOk"]) {
     while(strlen($string)>=1){
          $char=substr($string,0,1);
          $appearTimes=substr_count($string,$char,0);
          echo "$char appear $appearTimes times <br>";
                $string=str_replace($char,"",$string);
               //  echo "string $string <br>";
               //  echo strlen($string);
      } 
   }

?>

<html>
   <head>
      <meta charset="utf-8">
      <style>
         
      </style>
      
   </head>
   <body>
      <form method="post">
      Key in a sentence :<input type="text" name="string" value="<?php echo $string ?>">
      <input type="submit" name="btnOk" value="OK">
     </form>
   
   </body>
</html>