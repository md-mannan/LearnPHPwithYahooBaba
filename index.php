<?php
// php recursive function

function factorial($n)
{
    if ($n == 0) {
        return 1;
    } else {
        return ($n *  factorial($n - 1)); //5*4=20;20*3=60;60*2=120;120*1=120;
    }
}

echo factorial(5);
