<html lang="en">

<head>
    <title>Form</title>
</head>
<style>
    table {
        display: table;
        border-collapse: separate;
        border-spacing: 2px;
        border-color: gray;
    }

    table,
    th,
    td {
        border: 1px solid black;
    }

    th,
    td {
        padding: 10px;
    }

    table.center {
        margin-left: auto;
        margin-right: auto;
    }
</style>

<body style="text-align:center;background-color:bisque">
    <h1>Data Search</h1>
    <center>
        <form name="fm1" method="post" action="">
            <label>Roll No:</label>
            <input type="text" name="rno" />
            <input type="submit" value='Submit' name="submit"/>
        </form>
        <?php
        $con = mysqli_connect('localhost', 'root', '', 'student');
        if(isset($_POST['submit'])) {
            $rn = $_POST['rno'];
            $sq = "SELECT * FROM `stud` WHERE `roll_no` = $rn";
            // echo $sq; 
            $exc = mysqli_query($con, $sq);
            if (mysqli_num_rows($exc)) {
                echo "<form method=\"post\" action=\"\"><table >
                <tr>
           <td><b> Roll No</b></td>
           <td><b> Name</b></td>
           <td><b>Mark</b> </td>
                </tr>";
                while ($row=mysqli_fetch_assoc($exc)) {
                    echo "<tr>";
                    echo "<input hidden name='rno' value=".$row['roll_no']." /> ";
                    echo "<td><input disabled value=".$row['roll_no']." /></td>  ";
                    echo "<td><input name=\"nm\" value=".$row['name']." /></td>  ";
                    echo "<td><input name=\"mk\" value=".$row['mark']." /></td>  ";
                    echo "</tr>";
                }
            } else {
                echo "\n No data found";
            }
            echo "</tr></table>";
            
            echo "<input type=\"submit\" value='Update' name=\"update\"/></form>";
        }
        if(isset($_POST['update'])) {
            $rn = $_POST['rno'];
            $nm = $_POST['nm'];
            $mk = $_POST['mk'];
            $sq = "UPDATE stud SET `mark` = '$mk' WHERE `stud`.`roll_no` = $rn;";
            // echo $sq; 
            $exc = mysqli_query($con, $sq);
            echo "Updated Successfully";
        }
        ?>
    </center>
</body>

</html>