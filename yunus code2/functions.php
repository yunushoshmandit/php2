<?php

function sum($a, $b) {
    return $a + $b;
}

function sub($a, $b){
    return $a - $b;
}

function mul($a, $b){
    return $a * $b;
}

function div($a, $b){
    return $a / $b;
}

function executor($num1, $num2, $function_name){
    return $function_name($num1, $num2);
}

$n1 = 10;
$n2 = 2;

$sum_result = sum($n1, $n2);

$sum_result = sum($n1, $n2);

$new_result = executor($n1, $n2, "sum");

echo "New Result is: ". $new_result;

//////////////////


function heading_printer($text, $level = 1){
    if($level > 6){
        echo '<p style="color: red;">Level coudn\'t be smaller than 1</p>';
        return;
    }

    if($level < 1)
    echo "<h". $level . ">" . $text . "</" . $level . "h>";
}


$title_1 = "My Title 1";

$heading_2 = "My title 2";

heading_printer($title_1, 1);

heading_printer($heading_2, 2);

heading_printer("heading level 3", 3);


heading_printer("Last heading", 6);

heading_printer("Last Heading", 10);


heading_printer("First Level Heading");

heading_printer("First Level Heading", 0);

