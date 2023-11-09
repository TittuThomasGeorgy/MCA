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
    <h1>Welcome <?php echo $_POST['name']?></h1>
<center >
    <!-- <form action='data.php' method="post"> -->
        <table >
               <tr>
          <td>Name</td>
          <td colspan="2" > <?php echo $_POST['name']?></td>
        </tr>
        <tr>
            <td>Age</td>
            <td colspan="2" > <?php echo $_POST['age']?></td>
            
        </tr>
        
        <tr>
            <td>Email id</td>
            <td colspan="2" > <?php echo $_POST['email']?></td>
            <!-- <td>Email id</td> -->
        </tr>
        
        <tr>
          <td rowspan="2">Phone Num</td>
          <td>Home</td>
          <td>Office</td>
        </tr>
        <tr>
            <td> <?php echo $_POST['home']?></td>
            <td> <?php echo $_POST['office']?></td>
            
        </tr>
        
      </table>
    </form>
</center>
  </body>
</html>
