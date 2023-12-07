<?php
require "../common/dbcon.php";
$id = $_POST['id'];
$sub = $_POST['sub'];
$int1 = $_POST['int1'];
$int2 = $_POST['int2'];
$series = $_POST['series'];
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
$sq = "UPDATE `mark` SET `internal1` = $int1 ,`internal2` = $int2, `series`=$series WHERE `mark`.`ktu_id` = '$id ' AND `mark`.`sub` = '$sub';";
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
