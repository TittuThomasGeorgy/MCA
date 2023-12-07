<html lang="en">

<head>
</head>

<body style="background-color: antiquewhite;">
  <!-- <h1>Welcome <?php echo $_GET['name'] ?></h1>x -->
  <ul style="margin-left: 1">
    <li>
      <a href="../home/" target="body">Home</a>
    </li>
    <li>
      <a href="../registration/" target="body">Student Registration</a>
      <ul>

        <li> <a href="../registration/viewAll.php" target="body">View All</a></li>
      </ul>
    </li>
    <li>
      <a href="../mark" target="body">Mark</a>
      <ul>
        <li>
          <a href="../mark" target="body">Add</a>
        </li>
        <li>
          <a href="../mark/update.php" target="body">Update</a>
        </li>
        <li>
          <a href="../mark/viewAll.php" target="body">View</a>
        </li>
      </ul>
    </li>

  </ul>
</body>

</html>