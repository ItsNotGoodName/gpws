
<html>
	<head>
		<title>Hello</title>
         <link rel="stylesheet" href="sytle.css">
	</head>
    <body>
<?php
if( isset($_COOKIE['session']) && $_COOKIE['session'] == 'itsokman'){
?>
        <h1>Login Successful</h1>
<?php
}
else {
?>
<?php
if( isset($_GET['login']) && $_GET['login'] == 'failed' ){
?>
        <h1 class="error">Incorrect Username or Password</h1>
<?php
}
?>
		<form action="login.php" method="post">
            Username:<br>
            <input type="text" name="username">
            <br>
            Password:<br>
            <input type="password" name="password">
            <br><br>
            <input type="submit" name="submit" value="Login">
        </form>
<?php
}
?>
	</body>
</html>
