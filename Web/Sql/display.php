
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
   table, th, td {
     border: 1px solid black;
   }
   th, td {
padding: 10px;
}
   table.center {
     margin-left: auto;
     margin-right: auto;
   }
   </style>
  <body style="text-align:center;background-color:bisque">
    <h1>Display </h1>
<center >
    <!-- <form action='data.php' method="post"> -->
        <table >
               <tr>
          <td><b> Roll No</b></td>
          <td><b> Name</b></td>
          <td><b>Mark</b> </td>
               </tr>
        <?php
$con = mysqli_connect('localhost', 'root', '', 'student');
$sq = "SELECT * FROM `stud`";
// echo $sq; 
$exc = mysqli_query($con, $sq);
if(mysqli_num_rows($exc))
{
    while ($row=mysqli_fetch_assoc($exc)) {
        echo "<tr>";
        echo "<td>".$row['roll_no']."</td>  ";
        echo "<td>".$row['name']."</td>  ";
        echo "<td>".$row['mark']."</td>  ";
        echo "</tr>";
    }

}
else{
    echo "\n No data found";
}
?>     
      
      </table>
    </form>
</center>
  </body>
</html>
