<?php
// php local & global variables
// $a = 100;
function test()
{
    global $a;
    $a = 900;
    echo "Inside Function: " . $a . "<br>";
}
test();
echo  "Outside Function: " . $a . "<br>";
