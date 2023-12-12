<?php
require "../common/dbcon.php";
$id = $_POST['id'];
$sub = $_POST['sub'];
$ser1 = $_POST['ser1'];
$ser2 = $_POST['ser2'];
$asgn1 = $_POST['asgn1'];
$asgn2 = $_POST['asgn2'];
$attd = $_POST['attd'];
// $sq = "SELECT * FROM `stud` WHERE `ktu_id` = '$id' ";
// echo $sq1;
// $exc1 = mysqli_query($con, $sq1);
// if ($exc1) {
// if (mysqli_num_rows($exc1) > 0) {
//     echo "
// <script>
//     alert('KTU ID Already Exist'); 
//     window.location.href = './';        
//     </script>

//     ";
// } else {
$sq = "INSERT INTO `mark` (`ktu_id`, `sub`,`series1`, `series2`, `assignment1`,`assignment2`,`attendance`)  VALUES ('$id ', '$sub', '$ser1','$ser2 ', '$asgn1','$asgn2','$attd');";
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
