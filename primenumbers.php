        <?php
        $a=2;
        $b=1;
        
        for($a=2;$a<500;$a++){
           $count=0;
            for($b=1;$b<=$a;$b++){
                if($a%$b==0){
                    $count++;
            }}
                if($count==2){
                    echo $a;
            }
                
            }
        
        ?>
    