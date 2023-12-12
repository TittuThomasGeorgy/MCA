<?php
require "../common/dbcon.php";
$sq = "SELECT distinct(`ktu_id`),`sub` FROM `mark` ORDER BY `ktu_id` ASC;";
$exc = mysqli_query($con, $sq);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../common/css/style.css">
    <title>Mark Entry</title>
</head>

<body style="text-align: center;">
    <h2>Mark Update</h2>
    <form action="" method="post">
        <label for="id">KTU ID</label>
        <select name="id">
            <?php
            while ($row = mysqli_fetch_assoc($exc)) {
                echo "<option value='" . $row['ktu_id'] . "'>" . $row['ktu_id'] . "</option>";
            }
            ?>
        </select><br>
        <label for="sub">Sub</label>
        <select name="sub" id="">
            <?php
            $exc = mysqli_query($con, $sq);
            while ($row = mysqli_fetch_assoc($exc)) {
                echo "<option value='" . $row['sub'] . "'>" . $row['sub'] . "</option>";
            }
            ?>
        </select>
        <input type="submit" value="Search" name='search'>
    </form>
    <br><br>
    <?php
    if ($_POST && $_POST['search']) {
        $sq = "SELECT * FROM mark WHERE ktu_id = '$_POST[id]' AND sub = '$_POST[sub]'";
        $exc = mysqli_query($con, $sq);
        if (mysqli_num_rows($exc) > 0) {
            while ($row = mysqli_fetch_assoc($exc)) {
    ?>
                <form action="updateFormValidation.php" method="post">
                    <table class="center">
                        <tr>
                            <td for="id">KTU ID</td>
                            <td> <select name="id" id="" readonly>
                                    <?php
                                    echo "<option value='" . $row['ktu_id'] . "'>" . $row['ktu_id'] . "</option>";
                                    ?>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Sub</td>
                            <td> <select name="sub" id="">
                                    <?php echo "<option value='". $row['sub'] . "'>" . $row['sub']." </option>";?>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Series 1</td>
                            <td><input type="text" name="ser1" value=<?php
                                                                        echo  $row['series1'];
                                                                        ?>></td>
                        </tr>
                        <tr>
                            <td>Series 2</td>
                            <td><input type="text" name="ser2" value=<?php
                                                                        echo  $row['series2'];
                                                                        ?>></td>
                        </tr>
                        <tr>
                            <td>Assignment 1</td>
                            <td><input type="text" name="asgn1" value=<?php
                                                                        echo  $row['assignment1'];
                                                                        ?>></td>
                        </tr>
                        <tr>
                            <td>Assignment 2</td>
                            <td><input type="text" name="asgn2" value=<?php
                                                                        echo  $row['assignment2'];
                                                                        ?>></td>
                        </tr>
                        <tr>
                            <td>Attendance</td>
                            <td><input type="text" name="attd" value=<?php
                                                                        echo  $row['attendance'];
                                                                        ?>></td>
                        </tr>
                        <tr>
                            <td colspan="2"> <input type="submit" value="Submit" name="submit" /></td>
                        </tr>
                    </table>
                </form>
    <?php
            }
        } else
            echo "<h2>No Data Found</h2>";
    }
    ?>


</body>

</html>