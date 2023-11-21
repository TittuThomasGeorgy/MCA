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
  <h1>FACTORIAL</h1>
  <center>
    <form action='fact.php' method="post">

          <label>Enter the number:</label>
          <input type="text" name="num" /><br/><br/>
       <input type="submit" value='Submit' />
    </form>
  </center>
</body>

</html>