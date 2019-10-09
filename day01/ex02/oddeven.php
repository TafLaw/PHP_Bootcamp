#!/usr/bin/php
<?php 
    
    function oddeven($n)
    {
        if (($n%2) == 0)
            echo "The number " .$n. " is even\n";
        else
            echo "The number " .$n. " is odd\n";
    }

    function operate()
    {
        
        while (1)
        {
            echo "Enter a number: ";
            $x = rtrim(fgets(STDIN));
            if (feof(STDIN))
                break;
            if (is_numeric($x))
                oddeven($x);
            else if (ctype_alpha($x))
                echo "$x is not a number\n";
        }
    }
    operate();
?>