<?php
for($i=1;$i<=50;$i++){
    $numprimo=true;
    for($j=1;$j<=$i/2;$j++){
        if($i%$j==0){
            $numprimo=false;
        }
        if($numprimo==true){
            echo $i." ";
        }
    
}
}
?>