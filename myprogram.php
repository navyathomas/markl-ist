
        <?php
   $a=3003;
   $r=0;
   $rev=0;
   $b=$a;
  
   while($a>1){
       $r=$a%10;
    $rev=$rev *10+$r;
       $a=$a/10;   
   }
   echo $rev;
   if($rev==$b){
       echo 'number is pallindrome';
   }
 else {
       
       echo 'number not pallindrome';
 }
                                                                                            
          ?>
    