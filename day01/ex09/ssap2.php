#!/usr/bin/php
<?php
   function ssap2($ac, $av)
   {
       $arr = array();
       $letters = array();
       $digits = array();
       $other = array();
       $j = 0;
       $i = 1;
       $k = 0;

       while ($i < $ac)
       {
           $first = explode(" ", $av[$i]);
            foreach($first as $value)
                $arr[$j++] = $value;
            $i++;
       }
       $j = 0;
       $i = 0;
       foreach($arr as $value)
       {
            if (is_numeric($value))
               $digits[$i++] = $value;
            else if (ctype_alpha($value) || ctype_alnum($value))
                $alpha[$j++] = $value;
            else
                $other[$k++] = $value;
       }
       natcasesort($alpha);
       krsort($digits);
       sort($other);
       foreach($alpha as $value)
            echo "$value\n";
       foreach($digits as $value)
            echo "$value\n";
       foreach($other as $value)
            echo "$value\n";
   }
   if ($argc > 1)
        ssap2($argc, $argv); 
?>