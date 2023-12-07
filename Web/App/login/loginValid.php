<?php
session_start();    
require "../common/dbcon.php";
$unm = $_POST["username"];
$ps = $_POST["pass"];
$sq = "SELECT * FROM `login` WHERE `username` = '$unm' AND `password` = '$ps'";
echo $sq;
$exc = mysqli_query($con, $sq);
$rows=mysqli_num_rows($exc);
if ($rows) {
    $row = mysqli_fetch_assoc($exc);
    $_SESSION["name"]=urldecode($row['name']);
    $_SESSION["rno"]=urldecode($row['roll_no']);
        header("Location: ../");
} else {
    echo "
        <script>
            alert('Invalid Username or password'); 
            window.location.href = 'index.php';        
        </script>
        ";
}
