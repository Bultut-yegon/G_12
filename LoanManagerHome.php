<?php
session_start();

  if(!isset($_SESSION['Email'])){
    header("location:login.php");
  }

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoanManager Dashboard</title>
</head>

<body>
    <a href="logout.php">Logout</a>

</body>

</html>