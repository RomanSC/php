<?php
// Testing php
/* echo "Hello world!"; */

// Testing classes


// Hello world function
function HelloWorld() {
    echo " Hello world!";
    echo "\n This is testing php!";
}

HelloWorld();

function add_ns($a, $b){
    return $a + $b;
    /* Can also be written as: */
    /* $c = $a + $b; */
    /* return $c */
}

// Testing a custom sum function
function sum_thing($array) {
    $total = 0
    foreach ($array as &$val) {
        $total += $val;
    }

    return $total;
}

// Main function
function main() {
    echo "\n Starting main... ";

    $result = add_ns(2, 2);
    echo "\n $result";

    $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    list($1, $2, $3, $4, $5, $6. $7, $8, $9, $10) = $numbers;

    $result = sum_thing($numbers);
    echo "\n $result";
}

main();
?>
