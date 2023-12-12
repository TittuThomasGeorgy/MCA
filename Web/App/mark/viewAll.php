<html lang="en">

<head>
  <title>View All</title>
  <link rel="stylesheet" href="../common/css/style.css">
</head>

<body style="text-align:center;">
  <h1>Display </h1>
  <center>
    <!-- <form action='data.php' method="post"> -->
    <table>
      <tr>
        <td><b> KTU Id</b></td>
        <td><b> SUB</b></td>
        <td><b>Series 1</b> </td>
        <td><b>Series 2</b> </td>
        <td><b>Assignment 1</b> </td>
        <td><b>Assignment 2</b> </td>
        <td><b>Attendance%</b> </td>
        <!-- <td><b>Sem</b> </td> -->
      </tr>
      <?php
      require "../common/dbcon.php";
      $sq =      "SELECT * FROM `mark` ORDER BY `ktu_id` ASC ";
      $exc = mysqli_query($con, $sq);
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
          // echo "<td>" . $row['sem'] . "</td>  ";
          echo "</tr>";
        }
      } else {
        echo "\n No data found";
      }
      ?>

    </table>
    </form>
  </center>
</body>

</html>