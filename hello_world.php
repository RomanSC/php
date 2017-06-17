<?php
// Testing php
/* echo "Hello world!"; */

// Testing classes
class Foo {
    public $a_var = "Bar";

    function fun() {
        print "$a_var \n";
    }
}

// Hello world function
function HelloWorld() {
    print "Hello world! \n";
    /* print "This is testing php! \n"; */
}
// To execute
/* HelloWorld(); */

function add_ns($a, $b){
    return $a + $b;
    /* Can also be written as: */
    /* $c = $a + $b; */
    /* return $c */
}

// Testing a custom sum function
function sum_thing($arr) {
    $total = 0;
    foreach ($arr as $val) {
        $total += $val;
    }

    return $total;
}

function print_array($arr) {
    foreach ($arr as $val) {
        print "$val \n";
    }
}

// Main function (tests)
function main() {
    print "Starting main... \n";

    $result = add_ns(2, 2);
    print "$result \n";

    $numbers = array(2, 2);

    print_array($numbers);

    $result = sum_thing($numbers);
    print "$result \n";

    // New class instance
    // TODO: This is broken??
    /* $instance = Foo; */
    /* $instance -> {fun()}; */
}

main();
?>
