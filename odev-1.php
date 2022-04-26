<?php

function ucgen($sayi){
    for ($i=0; $i <= $sayi; $i++){
        for ($j=0; $j <= $i; $j++){
            echo "0  ";
        }
        echo "<br>";
    }
}

ucgen(15);

?>