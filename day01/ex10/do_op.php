#!/usr/bin/php
<?php
$result;
$var = array();
$i = 1;
$j = 0;
if ($argc == 4)
{
    while($i < $argc)
    {
            $var[$j] = trim($argv[$i]);
            $i++;
            $j++;
        }
        if($var[1] == '+')
            $result = ($var[0] + $var[2]);
        if($var[1] == '%')
            $result = ($var[0] % $var[2]);
        if($var[1] == '-')
            $result = ($var[0] - $var[2]);
        if($var[1] == '/')
            $result = ($var[0] / $var[2]);
        if($var[1] == '*')
            $result = ($var[0] * $var[2]);
        
        echo $result."\n";
    
}
?>