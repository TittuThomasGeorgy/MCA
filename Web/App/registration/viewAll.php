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
        <td><b> Name</b></td>
        <td><b>Age</b> </td>
        <td><b>Phn No</b> </td>
        <td><b>Address</b> </td>
        <td><b>Sem</b> </td>
      </tr>
      <?php
      require "../common/dbcon.php";
      $sq =      "SELECT * FROM `stud` ORDER BY `ktu_id` ASC ";
      $exc = mysqli_query($con, $sq);
      if (mysqli_num_rows($exc)) {
        while ($row = mysqli_fetch_assoc($exc)) {
          echo "<tr>";
          echo "<td>" . $row['ktu_id'] . "</td>  ";
          echo "<td>" . $row['name'] . "</td>  ";
          echo "<td>" . $row['age'] . "</td>  ";
          echo "<td>" . $row['phn_no'] . "</td>  ";
          echo "<td>" . $row['address'] . "</td>  ";
          echo "<td>" . $row['sem'] . "</td>  ";
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