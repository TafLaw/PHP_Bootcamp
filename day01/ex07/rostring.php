#!/usr/bin/php
<?php
$i = 1;
$string = trim($argv[1]);
$string = preg_replace('/\s+/', ' ', $string);
$string = explode(" ", $string);
while($string[$i] )
{
    echo $string[$i];
    if ($i < count($string))
    echo " ";
    $i++;
}
if($argc != 1)
echo $string[0]."\n";
?>