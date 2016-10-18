<?php 
$string="";
   if($_POST["btnOk"]) {
      $getDate=$_POST["getDate"];
      $endDay=$getDate;
      $firtDayOfYear=(substr($getDate,0,4)."-01-01");
      $days=(strtotime($endDay)-strtotime($firtDayOfYear))/3600/24;
      $string=" $days days between $firtDayOfYear to $endDay ";
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
      Select a date:<input type="date" id="getDate" name="getDate" value="<?php echo $getDate ?>">
      <input type="submit" name="btnOk" value="OK">
     </form>
     <p><?php echo $string?></p>
   </body>
</html>