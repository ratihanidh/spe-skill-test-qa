  <?php
  $n = 10;
  echo "bilangan prima n = $n" ;
  echo " // outputnya adalah " ;
  for($i=1;$i<=$n;$i++){ 
        $a = 0;
        for($j=1;$j<=$i;$j++){ 
            if($i % $j == 0){ 
                $a++; 
            }
        }
        if($a == 2){ 
         echo $i.' '; 
        }
    }
?>