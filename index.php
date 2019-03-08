<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/fonts.css">
<style>
button {
padding: 10px 25px 8px;
color: #fff;
background-color: #000000;
font-size: 16px;
border: 1px solid #333; 
border-radius: 2px;
margin-top: 10px;
cursor:pointer;
}
    </style>
<title><?php require 'config.php';
echo "$title";
?></title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['url'])){
        // removes backslashes
	$url = stripslashes($_REQUEST['url']);
        //escapes special characters in a string
	$url = mysqli_real_escape_string($con,$url); 
	$entry = stripslashes($_REQUEST['entry']);
	$entry = mysqli_real_escape_string($con,$entry);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `urls` (url, entry, trn_date)
VALUES ('$url', '$entry', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
  $folder = $_POST['entry'];
$dirPath = 'urls/'.$entry;
$result = mkdir($dirPath);

$dirPath = 'urls/'.$entry;
$txt = 'urls/'.$entry.'/index.html';
if (isset($_POST['url']) && isset($_POST['entry'])) { // check if both fields are set
    $fh = fopen($txt, 'w'); 
    $txt='<meta http-equiv="refresh" content="0; url='.$_POST['url'].'" />';
    fwrite($fh,$txt); // Write information to the file
    fclose($fh); // Close the file
}
  $folder = $_POST['entry'];
$dirPath = 'analytics/'.$entry;
$result = mkdir($dirPath);

if ($result == '1') {
$dirPath = 'analytics/'.$entry;
$txt = 'analytics/'.$entry.'/index.php';
if (isset($_POST['url']) && isset($_POST['entry'])) { // check if both fields are set
    $fh = fopen($txt, 'w'); 
    $txt='<?php include("../../inc/nav.php"); ?><br><br><p style="padding-left:5%;">The following domain entry exists:</p><p style="padding-left:5%;"><b>'.$_POST['entry'].'</b></p><br><br><br><?php include("../../inc/footer.php"); ?>';
    fwrite($fh,$txt); // Write information to the file
    fclose($fh); // Close the file
  
include 'inc/nav.php';
echo "<br><br>";
}
} else {
echo $dirPath . " Your link was Not Submitted. There was a Problem";
}
require 'config.php';
            echo "<h1 style='padding-left:5%;'>Here's your URL:</h1>";
                echo "<p style='padding-left:5%;'>URL: <a href='$url/urls/".$entry."' alt='Shortened Link'>"
                ;echo "$url/urls/".$entry."</a></p>";
echo "<br><br>";
include 'inc/footer.php';

        }
    }else{
?>
<center>
<?php include 'inc/nav.php';?>
<br>
<br>
<div class="form">
<h1>Shorten a Link</h1>
<form name="registration" method="post">
<input type="text" name="url" placeholder="URL to Shorten" required />
<input type="text"  id="entry" name="entry" placeholder="Custom Text (<?php require 'config.php'; echo "$url"; ?>/urls/CUSTOM_TEXT)" required />
<br>
<button type="submit" class="submit" name="submit" value="Shorten Link">Shorten Link</button>
</form>
</div>
</center>
<?php include 'inc/footer.php';?>
<?php } ?>
</body>
</html>
