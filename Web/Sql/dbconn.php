<?php
    $con=mysqli_connect('localhost','root','','student');
    if ($con) {
        echo"connection successful";
    } else {
        echo"connection failed";
    }
    $nm=$_POST['name'];
    $mr=$_POST['mrk'];
    $rn=$_POST['rno'];
    $sq="INSERT INTO `stud`(`roll_no`, `name`, `mark`) VALUES ('$rn' ,'$nm','$mr')";
    // echo $sq; 
    $exc=mysqli_query($con,$sq);
    if ($exc) {
        echo "
        <script>
            alert('Successfuly inserted');        
        </script>
        ";
    } else {
        echo "
        <script>
            alert('insertion Failed');        
        </script>
        ";
    }
    
?>
