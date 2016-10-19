<?php
   // 給一個3位數,函數combinNo 會回覆一個有3個數字排列組合的數字陣列(6個數)
      function combinNo($no){
           for ($i=0;$i<=2;$i++){
              $char[$i+1]=substr($no,$i,1);
               }   
                  $n[1]=(int)($char[1].$char[2].$char[3]);
                   $n[2]=(int)($char[1].$char[3].$char[2]);
                    $n[3]=(int)($char[2].$char[1].$char[3]);
                     $n[4]=(int)($char[2].$char[3].$char[1]);
                      $n[5]=(int)($char[3].$char[1].$char[2]);
                       $n[6]=(int)($char[3].$char[2].$char[1]);
         return $n;
      }
               

                 $totle=0;
                 $string="1234";/*任意給4個不同的數字會列出不重覆出現的3位數*/
                 
                 $string=$string.substr($string,0,-2); /*"1234"+"12"  */
                 for ($k=0;$k<=3;$k++){               /*1234 (4位數)有4種不重覆的取法 123 234 341 412, 每個又有6個排列方式            */
                    $nstr[$k]=substr($string,$k,3);
                      for ($i=1;$i<=6;$i++){
                         echo combinNo($nstr[$k])[$i];
                         $totle+=1;
                         echo" ---- ";
                      }    
                 }
                 echo " <br> Total: $totle  numbers";
                   
               
                     
                    
               
                 
              

?>