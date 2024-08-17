<?php
// php recursive function

function display($a)
{
    if ($a <= 5) {
        echo $a . "<br>";
        display($a + 1);
    }
}

display(1);
