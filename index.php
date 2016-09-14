<?php
//phpinfo();

$a1=true;
$a2=false;
//Это исключающее или. TRUE если $a, или $a1 TRUE, но не оба.
var_dump($a1 xor $a1);//false

var_dump($a1 xor $a2);//true
var_dump($a2 xor $a1);//true
var_dump($a2 xor $a2);//false

?>