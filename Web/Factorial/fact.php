<html lang="en">

<head>
  <title>Form</title>
</head>

<?php 
function fact()
{
  $num = $_POST['num'];
  $fact = 1;
  for ($i = $num; $i > 0; $i--) {
    $fact *= $i;
  }
 return($fact);
}
?>
<body style="text-align:center;background-color:bisque">
    <h2 style="text-align: center;position: absolute;top: 50%;left: 50%;">Factorial of <?php echo $_POST["num"].' : '.fact() ?></h2>
    alert
</body>

</html>