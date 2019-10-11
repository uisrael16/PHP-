#!/usr/bin/php
<?php
    function ft_split($string){
        $str_arr = explode(" ", $string);
        $res = array_filter($str_arr);
        sort($res);
        return($res);
    }

    $arr = array();
    $cnt = 1;
    while($cnt != $argc)
    {
        $arr = array_merge($arr, ft_split($argv[$cnt]));
        $cnt++;
    }
    sort($arr);
    foreach($arr as $a){
        print($a);
        print("\n");
    }
?>