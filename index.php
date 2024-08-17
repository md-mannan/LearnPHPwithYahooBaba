<?php
// php while loop

$count = 0;
while ($count <= 10) {
    $count++;
    echo  "<h1>" . $count . "/ Hellow World</h1>";
    if ($count == 5) {
        break;
    }
}
