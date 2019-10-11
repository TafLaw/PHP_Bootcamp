#!/usr/bin/php
<?php
    $av = preg_replace('/\s+/', ' ', $argv[1]);
    $string = trim($av);
    $value = explode(" ", $string);
    if ($argc == 1)
    {
        echo ("Incorrect Parameters")."\n";
        exit;
    }
    if (count($value) > 1 && count($value) != 3)
    {
        foreach ($value as $test)
        {
            if (!(is_numeric($test)))
            {
                echo ("Syntax Error")."\n";
                exit;
            }
        }
    }
    if (count($value) == 3)
    {
        if(!(is_numeric($value[0])) || !(is_numeric($value[2])))
        {
            echo ("Syntax Error")."\n";
            exit;
        }
    }
    if (count($value) == 1)
    {   
        if(strpos($value[0], "+") != false)
        {
            $result = explode("+", $value[0]);
            if (!(is_numeric($result[0])) || !(is_numeric($result[1])))
            {
                echo ("Syntax Error")."\n";
                exit;
            }
            echo ($result[0] + $result[1])."\n";
            exit;
        }
        if(strpos($value[0], "-") != false)
        {
            $result = explode("-", $value[0]);
            if (!(is_numeric($result[0])) || !(is_numeric($result[1])))
            {
                echo ("Syntax Error")."\n";
                exit;
            }
            echo ($result[0] + $result[1])."\n";
            exit;
        }
        if(strpos($value[0], "*") != false)
        {
            $result = explode("*", $value[0]);
            if (!(is_numeric($result[0])) || !(is_numeric($result[1])))
            {
                echo ("Syntax Error")."\n";
                exit;
            }
            echo ($result[0] * $result[1])."\n";
            exit;
        }
        if(strpos($value[0], "/") != false)
        {
            $result = explode("/", $value[0]);
            if (!(is_numeric($result[0])) || !(is_numeric($result[1])))
            {
                echo ("Syntax Error")."\n";
                exit;
            }
            echo ($result[0] + $result[1])."\n";
            exit;
        }
        else
        {
            echo ("Syntax Error")."\n";
            exit;
        }
    }
    else
    {
        if($value[1] == '+')
            $result = ($value[0] + $value[2]);
        if($value[1] == '%')
            $result = ($value[0] % $value[2]);
        if($value[1] == '-')
            $result = ($value[0] - $value[2]);
        if($value[1] == '/')
            $result = ($value[0] / $value[2]);
        if($value[1] == '*')
            $result = ($value[0] * $value[2]);
        
        echo $result."\n";
    }
?>