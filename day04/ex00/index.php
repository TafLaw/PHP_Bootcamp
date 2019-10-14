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
        <form method="GET">
            <p>Username</p><br/>
            <input type="text" name="login" placeholder="username">
            <p>Password</p><br/>
            <input type="text" name="passwd" placeholder="password"><br/>
            <input type="submit" name="submit" value="OK">
        </form>
    </body>
</html>