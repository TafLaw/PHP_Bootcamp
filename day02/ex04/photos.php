#!/usr/bin/php
<?php
   $result=file_get_contents($argv[1]);
   $value=preg_match_all('/<img src=(.*?)>/', $result, $mat);
   /* fopen("test", 'w'); */
   print_r($mat);
?>