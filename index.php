<?php
// php datatypes
$dataone = "Text";
var_dump($dataone);
echo '</br>';

$datatwo = 2;
var_dump($datatwo);
echo '</br>';

$datathree = 2.200;
var_dump($datathree);
echo '</br>';

$datatfour = true;
var_dump($datatfour);
echo '</br>';

$datatfive = array('apple', 'orange', 'orange', 'orange', 'orange', 'orange', 'orange', 'orange');
var_dump($datatfive);
echo '</br>';

class MyClass
{
    public function my()
    {
        return "Hello World";
    }
}
$datatsix = new MyClass();
var_dump($datatsix);
echo '</br>';
var_dump($datatsix->my());
echo '</br>';
$datatseven = null;
var_dump($datatseven);
echo '</br>';
