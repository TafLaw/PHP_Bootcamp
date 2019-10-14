<?php 
    session_start();
    if ($_GET["submit"] == "OK")
    {
        $_SESSION["login"] = $_GET["login"];
        $_SESSION["passwd"] = $_GET["passwd"];
    }
?>
<html>
    <body>
        <form method="GET" value=".">
            Username: <input type="text" name="login" placeholder="username" value="
            <?php
                if ($_SESSION['login']);
                    echo $_SESSION['login'];
            ?>" /><br />
            Password:   <input type="password" name="passwd" placeholder="password" style="margin-top: 6px;" value="
            <?php
                if ($_SESSION['passwd']);
                    echo $_SESSION['passwd'];
            ?>" /><br />
            <input type="submit" name="submit" value="OK" />
        </form>
    </body>
</html>