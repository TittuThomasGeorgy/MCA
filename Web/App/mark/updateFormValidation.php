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
$sq = "UPDATE `mark` SET `series1` = $ser1 ,`series2` = $ser2, `assignment1`=$asgn1, `assignment2`=$asgn2, `attendance`=$attd WHERE `mark`.`ktu_id` = '$id ' AND `mark`.`sub` = '$sub';";
echo $sq;
$exc = mysqli_query($con, $sq);
if ($exc) {
    echo "
        <script>
            alert('Successfuly updated ". $id ."'); 
            window.location.href = './viewAll.php';        
            </script>
            ";
} else
    echo "
        <script>
            alert('updation Failed'); 
            window.location.href =  './viewAll.php';      
            </script>
            ";
