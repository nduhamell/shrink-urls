<?php
require '../config.php';
$con=mysqli_connect("localhost","$admindbuser","$admindbpassword","$admindbname");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>