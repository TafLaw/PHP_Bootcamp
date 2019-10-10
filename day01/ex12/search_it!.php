#!/usr/bin/php
<?php 
    function search($ac, $av)
    {
        $key = $av[1];
        $found = 0;

        foreach($av as $value)
        {
            $arr = explode(":", $value);
            if ($arr[0] == $key)
            {
                $val = $arr[1];
                $found++;
            }
        }
        if ($found && $val)
            echo "$val\n";
    }
    search($argc, $argv);
?>