<?php
// php while loop

$count = 1;
do {
    echo  "<h1>" . $count . "/ Hellow World</h1>";
    // increment the counter by 1 each iteration
    if ($count == 1) {
        break;  // break the loop if the counter reaches 5
    }
    $count++;
} while ($count <= 10);
