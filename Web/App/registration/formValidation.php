<?php
require "../common/dbcon.php";
$id = $_POST["ktu_id"];
$nm = $_POST["name"];
$ag = $_POST["age"];
$sem = $_POST["sem"];
$ph = $_POST["phno"];
$ad = $_POST["addr"];

$sq1 = "SELECT * FROM `stud` WHERE `ktu_id` = '$id' ";
echo $sq1;
$exc1 = mysqli_query($con, $sq1);
if ($exc1) {
    if (mysqli_num_rows($exc1) > 0) {
        echo "
    <script>
        alert('KTU ID Already Exist'); 
        window.location.href = './';        
        </script>

        ";
    } else {
        $sq = "INSERT INTO `stud` (`ktu_id`, `name`, `age`, `phn_no`, `address`, `sem`) VALUES ('$id ', '$nm', '$ag ', '$ph', '$ad', '$sem');";
        echo $sq;
        $exc = mysqli_query($con, $sq);
        if ($exc) {
            echo "
        <script>
            alert('Successfuly inserted'); 
            window.location.href = './viewAll.php';        
            </script>
            ";
        } else
            echo "
        <script>
            alert('insertion Failed'); 
            window.location.href = './';        
            </script>
            ";
    }
} else
    echo "
        <script>
            alert('insertion Failed'); 
            window.location.href = './';        
            </script>
            ";
