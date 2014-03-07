<?php

$con=mysqli_connect("mysql.hostinger.in","u281142704_spark","sparkspark","u281142704_spark");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
echo "<br>";

$sql="INSERT INTO review VALUES('$_POST[movie_num]','$_POST[review]','$_POST[username]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "Comment from " . $_POST['username'] . " saying " . $_POST['review'] . ", was added successfully.";

mysqli_close($con);
?>