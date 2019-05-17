<?php

$username = "admin";
$password = "house";

if(isset($_POST['username']) && isset($_POST['password']))
{
    if($_POST['username'] == $username && $_POST['password'] == $password)
    {
        setcookie("session","itsokman",time()+10);
        header("Location: /");
    }
    else
    {
        header("Location: /?login=failed");
    }
}
else
{
    header("Location: /?login=failed");
}

?>
