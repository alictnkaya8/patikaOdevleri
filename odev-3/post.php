<?php

if (isset($_POST["sayi"])){
    $sayi = $_POST["sayi"];
    if (empty($sayi)){
        echo "Lütfen bir sayı girin!";
    } else {
        if ($sayi % 3 == 0){
            echo "$sayi sayısı 3 ile tam bölünüyor.";
        } else {
            $counter = $sayi;
            while ($counter % 3 !== 0){
                $counter++;
            }
            echo "$sayi sayısı 3 ile tam bölünemiyor. 3 ile bölünebilecek ilk sayı $counter'dır.";
        }
    }
}
