#!/usr/bin/php
<?php
    function match($matches)
    {
        return str_replace($matches[1], strtoupper($matches[1]), $matches[0]);
    }    
   function magnify($ac, $av)
   {
       $file = fopen($av[1], "r") or die("file can not be opened!");

       while (!feof($file))
       {
           $read = fgets($file);
           $read = preg_replace_callback('/<a.*?title="(.*?)">/', "match", $read);
           $read = preg_replace_callback('/<a.*?>(.*?)</', "match", $read);
           echo $read;
       }
   }
   if ($argc == 2)
        magnify($argc, $argv);
?>