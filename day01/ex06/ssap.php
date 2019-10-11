#!/usr/bin/php
<?php
$i = 1;
$j = 0;
if($argc != 1)
{
    while ($i < $argc)
    {
        $string = trim($argv[$i]);
        $string = preg_replace('/\s+/', ' ', $string);
        $string = explode(" ", $string);
        foreach($string as $value)
        {
            $str_arr[$j] = $value;
            $j++;
        }
        $i++;
    }
    sort($str_arr);
    foreach($str_arr as $value)
        echo $value."\n";
}
?>