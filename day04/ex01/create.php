<?php 
    $user = $_POST["login"];
    $pass = $_POST["passwd"];

    if ($_POST["submit"] == "OK")
    {
        if (empty($user) or empty($pass))
        {
            echo "ERROR\n";
            return ;
        }
        else
        {
            if (!file_exists("./private") || !file_exists("./private/passwd"))
                mkdir("private");
            /* $file = fopen("account", "w");
            fwrite($file, $user);
            fwrite($file, $pass); */
        }
        echo "we're in\n";
    }
    else
        echo "ERROR\n";
?>