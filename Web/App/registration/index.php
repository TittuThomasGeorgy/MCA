<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../common/css/style.css">
    <title>Student Reg</title>
</head>

<body>
    <form action="formValidation.php" method="post">
    <table class="center">
        <tr>
            <th colspan="2">Student Registration</td>
        </tr>
        <tr>
            <th>KTU Id</th>
            <td><input name="ktu_id" /></td>
        </tr>
        <tr>
            <th>Name</th>
            <td><input name="name" /></td>
        </tr>
        <tr>
            <th>Age</th>
            <td><input name="age" /></td>
        </tr>
        <tr>
            <th>Semester</th>
            <td><select name="sem" id="">
                <option value="I">I</option>
                <option value="II">II</option>
                <option value="III">III</option>
                <option value="IV">IV</option>
            </select></td>
        </tr>
        <tr>
            <th>Phone Num</th>
            <td><input name="phno" /></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><textarea name="addr" ></textarea></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;"><input type="submit" value="Submit" name="submit" /></td>
        </tr>
    </table>
    </form>
</body>

</html>