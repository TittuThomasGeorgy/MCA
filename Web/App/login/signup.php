<?php require "../common/dbcon.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../common/css/style.css">
    <title>Login</title>
</head>

<body>
    <h1>Sigup</h1>
    <form action="formValid.php" method="post">
        <label for="name">Name:</label>
        <input name="name" /><br/>
        <label for="username">Username:</label>
        <input name="username" type="mail"/><br/>
        <label for="pass1">Password:</label>
        <input name="pass1" type="password"/><br/>
        <label for="pass2">Re type Password:</label>
        <input name="pass2" type="password"/><br/>
        <input type="submit" value="Submit">
    </form>
</body>

</html>