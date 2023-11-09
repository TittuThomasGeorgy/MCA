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
    <h1>Welcome to Freshers World</h1>
<center >
    <form action='data.php' method="post">
        <table >
        <tr>
          <th colspan="3">Registration</th>
        </tr>
        <tr>
          <td>Name</td>
          <td  colspan="2" ><input type="text" name="name"/></td>
        </tr>
        <tr>
          <td>Age</td>
          <td colspan="2"><select name='age'  >
            <?php
            for($i=18;$i<25;$i++){
              echo "<option value=".$i.">".$i."</option>";
            }
            ?>
          </select></td>
        </tr>
        
        <tr>
          <td>Email id</td>
          <td  colspan="2"><input type="email" name="email"></td>
        </tr>
       
        <tr>
          <td rowspan="2">Phone Num</td>
            <td>Home</td>
            <td>Office</td>
        </tr>
        <tr>
            <td><input type="text" name="home"/></td>
            <td><input type="text" name="office"/></td>
        </tr>
        
          <tr>
            <td><input type="reset" value="Reset"/></td>
            <td colspan="2"><input type="submit" value='Submit'/></td>
        </tr>
      </table>
    </form>
</center>
  </body>
</html>
