<?php

include 'config.php';

$name = 'Ahmad';

$ip = '192.168.0.1';

$GLOBALS['ip'] = $ip; // Server level associative array is Globals .
$GLOBALS['port'] = '443';

my_printer($name);



function my_printer($n){
    echo '<h1> My name is '. $n . '.</h1>';

    echo 'This is my IP address: '. $GLOBALS['ip'];
}

echo "<br>";

echo "My domain name is " . domain;

echo "<strong>" . db_name ."</strong>";
