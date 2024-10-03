<?php

$num=rand(1,1000);

$sum=0;
for ($i=1; $i< $num; $i++) {
    if ($num % $i == 0) {
        $sum += $i;
    }
}if ($sum == $num) {
    echo "El número $num es perfecto";
} else {
    echo "El número $num no es perfecto";
}
?>
    