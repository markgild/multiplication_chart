<?php


function tablemap($n) {
    //$n = (int)readline("Enter number of rows: ");
    //$n = 10;

    echo "Table of\t";
    for ($i = 1; $i <= $n; $i++) {
        echo $i . "\t";
    }
    echo "\n";



    for ($i = 1; $i <= $n; $i++) {
        echo $i . "\t\t";
        for ($j = 1; $j <= $n; $j++) {
            $result = $i * $j;
            echo $result . "\t";
        }
        echo "\n";
    }
}


$input = (int)readline("Enter number of rows: ");
tablemap($input);


?>