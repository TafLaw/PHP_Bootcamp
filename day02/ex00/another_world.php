#!/usr/bin/php
<?php
if($argc != 1)
{
    $string = trim($argv[1]);
    $string = preg_replace('/\s+/', ' ', $string);
    echo $string."\n";
}
?>