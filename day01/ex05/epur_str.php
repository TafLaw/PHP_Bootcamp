#!/usr/bin/php
<?php
    $val = trim($argv[1]);
    $val = preg_replace('/\s+/', ' ', $val);
    echo $val."\n";
?>