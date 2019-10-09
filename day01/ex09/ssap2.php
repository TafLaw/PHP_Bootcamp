#!/usr/bin/php
<?php 
   
   function ssap2($ac, $av)
   {
       $arr = array();
       $j = 0;
       $i = 1;

       while ($i < $ac)
       {
           $first = explode(" ", $av[$i]);
            foreach($first as $value)
                $arr[$j++] = $value;
            $i++;
       }
       natcasesort($arr);
       foreach($arr as $value)
            echo "$value\n";
   }
   ssap2($argc, $argv); 
?>