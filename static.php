<?php
function num() {
    static $var = 1;
    echo $var . "<br />";
    $var++;
}
num();
num();
num();
?>
