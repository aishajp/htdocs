<?php

$num = rand(1, 100);

$primo=true;

if($num==1){
    $primo=false;
}else{
    for($i = 2; $i<=$num / 2; $i++){
        if($num % $i == 0){
            $primo=false;

        }
    }
}

if($primo){
    echo "$num es un numero primo";
}else{
    echo "$num no es un numero primo";
}
?>