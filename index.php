<?php
// php reference argument vs value argument

function wow($a)
{
    return $a;
}
$a = "Hellow";
echo wow($a);
echo "</br>";
function greeting(&$a)
{

    $a = 'hey';
    return $a;
}
echo $a;
echo "</br>";
echo greeting($a);
echo "</br>";

echo $a;
