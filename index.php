<?php
// php goto

for ($i = 0; $i <= 10; $i++) {
    echo "<h1>Hellow world<h1/>";
    if ($i == 3) {
        goto abc;
    }
}

echo "hello world";
echo "Hellow Mannan";

abc:
echo "This is the end";
