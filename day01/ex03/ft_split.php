#!/usr/bin/php
<?php 
    function ft_split($st)
    {
        $i = 0;
        $j = 0;
        $str = explode(" ", $st);
        $size = count($str);
        $newArray = array();

        sort($str);
        while ($i < $size)
        {
            if ($str[$i] == NULL)
                unset($str[$i]);
            else
                $newArray[$j++] = $str[$i];
            $i++;
        }
        sort($newArray);
        print_r ($newArray);
    }
?>