<?php
require "../common/dbcon.php";
$sq = "SELECT `ktu_id` FROM `stud` ORDER BY `ktu_id` ASC;";
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
    <h2>Mark Entry</h2>
    <form action="formValidation.php" method="post">
        <table class="center">
            <tr>
                <td for="id">KTU ID</td>
                <td> <select name="id" id="">
                        <?php
                        while ($row = mysqli_fetch_assoc($exc)) {
                            echo "<option value='" . $row['ktu_id'] . "'>" . $row['ktu_id'] . "</option>";
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td>Sub</td>
                <td><input type="text" name="sub"></td>
            </tr>
            <tr>
                <td>Internal 1</td>
                <td><input type="text" name="int1"></td>
            </tr>
            <tr>
                <td>Internal 2</td>
                <td><input type="text" name="int2"></td>
            </tr>
            <tr>
                <td>Series</td>
                <td><input type="text" name="series"></td>
            </tr>
            <tr>
                <td colspan="2"> <input type="submit" value="Submit" name="submit" /></td>
            </tr>
        </table>
    </form>
   
</body>

</html>