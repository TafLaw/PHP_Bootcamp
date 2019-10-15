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
            if (file_exists("./private/passwd"))
            {
                $arr = unserialize(file_get_contents("./private/passwd"));
                foreach ($arr as $value)
                {
                    if ($value["login"] === $user)
                    {
                        echo "ERROR\n";
                        return;
                    }
                }
            }
            $new["login"] = $user;
            $new["passwd"] = hash('md5', $pass);
            $arr = array($new);
            file_put_contents("./private/passwd", serialize($arr));
        }
        echo "OK\n";
    }
    else
        echo "ERROR\n";
?>