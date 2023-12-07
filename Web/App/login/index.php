<?php require "../common/dbcon.php";
;?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../common/css/style.css">
    <title>Login</title>
</head>

<body>
    <h1>LOGIN</h1>
    <form action="loginValid.php" method="post">
        <label for="username">Username:</label>
        <input name="username" type="mail"/><br/>
        <label for="pass">Password:</label>
        <input name="pass" type="password"/><br/>
        <a href="signup.php">Register</a>
        <input type="submit" value="Submit">
    </form>
</body>

</html>