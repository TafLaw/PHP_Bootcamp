#!/usr/bin/php
<?php
   $result=0;
   $value=explode(" ", $argv[1]);
   $n=count($value);
   $i=1970;
   $j=11;
   $k=2;
   $time = strtotime('2001-11-14 -3 years -3 months -3 days');
   if ($n != 5)
   {
       echo "Wrong Format\n";
       exit;
   }
   echo $time."\n";
?>