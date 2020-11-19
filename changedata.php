<!DOCTYPE html>
<html>
<head>
  <title>Edit Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
    <body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'labwebdata.mysql.database.azure.com', 'kanakarn@labwebdata', 'Jaoo01062544', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
  die('Failed to connect to MySQL PLEASE TRY AGAIN: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];


$sql = "UPDATE guestbook SET Comment='$comment' WHERE Name='$name' ";


if (mysqli_query($conn, $sql)) {
  header("Location: showdata.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>