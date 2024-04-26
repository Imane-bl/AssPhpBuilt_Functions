<?php
$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];


 implode("",$chars = array_filter($chars, function($chars){
    return is_string($chars);}));

    $chars =array_map("strtolower",$chars);
$chars =array_map("ucfirst",$chars);
echo implode("",$chars);







// Output "Elzero"
