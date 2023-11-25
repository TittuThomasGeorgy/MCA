<?php
require "dbcon.php";
$nm = $_POST["name"];
$unm = $_POST["username"];
$ps1 = $_POST["pass1"];
$ps2 = $_POST["pass2"];
if ($ps1 == $ps2) {
    $sq = "INSERT INTO `login` ( `name`, `username`, `password`) VALUES ( '$nm', '$unm', '$ps1');";
    echo $sq;
    $exc = mysqli_query($con, $sq);
    if ($exc) {
        echo "
        <script>
            alert('Successfuly inserted'); 
            window.location.href = 'index.php';        
        </script>
        ";
    } else {
        echo "
        <script>
            alert('insertion Failed'); 
            window.location.href = 'index.php';        
        </script>
        ";
    }
} else
    echo "
    <script>
     alert('password not matching')      ;
     window.location.href = 'index.php';   
    </script>";