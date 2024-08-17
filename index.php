<?php
// php array

$arr = array('Appleses', 'Banana', 'mango', 'grapes');
foreach ($arr as $key => $value) {
    echo $value . "<br>"; // output: Appleses, Banana, mango, grapes
}
echo  "<br>";
echo  "<br>";
echo  "<br>";
for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . "<br>"; // output: Appleses, Banana, mango, grapes
}
