<?php 
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../common/css/style.css">
    <title>Home</title>
</head>
<body>
    <h1 style="text-align: center;">Welcome <?php echo $_SESSION["name"];?></h1>
</body>
</html>