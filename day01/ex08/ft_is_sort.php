#!/usr/bin/php
<?php 
    function ft_is_sort($arr)
    {
        $input = $arr;
        $i = 0;
        $j = 0;
        $len = count($arr);
        
        sort($arr);
        while ($i++ < $len)
        {
            if ($input[$i] == $arr[$i])
                $j++;
        }
        if ($j == $len)
            return true;
        else
            return false;
    }
?>