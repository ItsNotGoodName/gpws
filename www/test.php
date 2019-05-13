<?php

$username = "admin";
$password = "password";

if(isset($_POST['username']) && isset($_POST['password']))
{
    if($_POST['username'] == $username && $_POST['password'] == $password)
    {
        echo "CORRECT";
    }
    else
    {
        echo "NOT CORRECT \n" . json_encode($_POST);
    }
}
else
{
    echo "NOT SET \n" . json_encode($_POST);
}

?>
