<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
<html>
<head><title>Admin -
<?php require '../config.php';
echo "$title";
?></title>
</head>
<body>
<?php include '../inc/nav.php';?>
<br>
<br>
<h3>Welcome <?php echo $_SESSION['username']; ?>!</h3>
<p>Here you can see the registered admins as well as all the URLs that have been shortened.</p>
<a style="margin-left:3%;" href="logout.php" alt="Logout">Logout >></a>
<br>
<p style="font-size:18px;">Registered Users</p>
<br>
<?php
require '../inc/admin-login-db.php';

$result = mysqli_query($con,"SELECT * FROM users");

echo "<table border='1' style='margin-left:5%;margin-bottom:2%;';>
<tr>
<th>Username</th>
<th>E-Mail</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
<br>
<p style="font-size:18px;">Current URLs</p>
<br>
<?php
require '../inc/main-db.php';

$result = mysqli_query($con,"SELECT * FROM urls");

echo "<table border='1' style='margin-left:5%;margin-bottom:10%;';>
<tr>
<th>URL</th>
<th>Entry</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['url'] . "</td>";
echo "<td>" . $row['entry'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
<!-- Start Footer -->
<br>
<br>
<?php include '../inc/footer.php';?>
</body>
</html>