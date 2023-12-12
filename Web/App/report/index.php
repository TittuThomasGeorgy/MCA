<?php
require "../common/dbcon.php"; ?>

<html lang="en">

<head>
    <title>Report</title>
    <link rel="stylesheet" href="../common/css/style.css">
</head>

<body style="text-align:center;">
    <h1>Report </h1>
    <center>
        <form method="post">
            <table class="center">
                <tr>
                    <td for="id">KTU ID</td>
                    <td> <select name="id" id="">
                            <?php
                            $sq = "SELECT `ktu_id` FROM `stud` ORDER BY `ktu_id` ASC;";
                            $exc = mysqli_query($con, $sq);
                            while ($row = mysqli_fetch_assoc($exc)) {
                                echo "<option value='" . $row['ktu_id'] . "'>" . $row['ktu_id'] . "</option>";
                            }
                            ?>
                        </select></td>
                </tr>
                <tr>
                    <td>Sub</td>
                    <td> <select name="sub" id="">
                            <?php
                            $sq = "SELECT `sub` FROM `subject` ORDER BY `sub` ASC;";
                            $exc = mysqli_query($con, $sq);
                            while ($row = mysqli_fetch_assoc($exc)) {
                                echo "<option value='" . $row['sub'] . "'>" . $row['sub'] . "</option>";
                            }
                            ?>
                        </select></td>
                </tr>

                <tr>
                    <td colspan="2"> <input type="submit" value="Submit" name="search" /></td>
                </tr>
            </table>
        </form>
        <?php
        if ($_POST && $_POST['search']) {
            $sq = "SELECT * FROM mark WHERE ktu_id = '$_POST[id]' AND sub = '$_POST[sub]'";
            // echo $sq;
           
        ?>
                    <table>
                        <tr>
                            <td><b> KTU Id</b></td>
                            <td><b> SUB</b></td>
                            <td><b>Series 1</b> </td>
                            <td><b>Series 2</b> </td>
                            <td><b>Assignment 1</b> </td>
                            <td><b>Assignment 2</b> </td>
                            <td><b>Attendance%</b> </td>
                            <td><b>Internal Mark</b> </td>
                            <!-- <td><b>Sem</b> </td> -->
                        </tr>
                        <?php
                         $exc = mysqli_query($con, $sq);
                         function calc_Internal($s1,$s2,$a1,$a2,$at)  {
                            if($at<75)
                             return 0;
                            else if(($at<80))
                             $at_mark=2;
                            else if(($at<85))
                             $at_mark=4;
                            else if(($at<90))
                             $at_mark=6;
                            else if(($at<100))
                             $at_mark=8;
                           else
                            return 0;
                        return ($s1+$s2+$a1+$a2)/20+$at_mark;
                         }
                        if (mysqli_num_rows($exc)) {
                            while ($row = mysqli_fetch_assoc($exc)) {
                                echo "<tr>";
                                echo "<td>" . $row['ktu_id'] . "</td>  ";
                                echo "<td>" . $row['sub'] . "</td>  ";
                                echo "<td>" . $row['series1'] . "</td>  ";
                                echo "<td>" . $row['series2'] . "</td>  ";
                                echo "<td>" . $row['assignment1'] . "</td>  ";
                                echo "<td>" . $row['assignment1'] . "</td>  ";
                                echo "<td>" . $row['attendance'] . "</td>  ";
                                echo "<td>" . calc_Internal($row['series1'],$row['series1'],$row['assignment1'],$row['assignment1'],$row['attendance'])  . "/20 </td>  ";
                                // echo "<td>" . $row['sem'] . "</td>  ";
                                echo "</tr>";
                          
                        ?>

                    </table>
        <?php
                }
            } else
                echo "<h2>No Data Found</h2>";
        }
        ?>
        <!-- <form action='data.php' method="post"> -->


    </center>
</body>

</html>