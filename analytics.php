<?php include 'inc/nav.php' ?>
<html>
<head>
<link rel="stylesheet" href="css/fonts.css">
<style>
input {
width: 50%;
border-radius: 2px;
border: 1px solid #CCC;
padding: 10px;
color: #333;
font-size: 14px;
margin-top: 10px;
margin-left: 5%;
}
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
</head>
<br>
<br>
<h1 style="padding-left:5%;">Does the Shortened URL Already Exist?</h1>
<p style="padding-left:5%;">Do not enter the whole domain. Only enter the custom text part after the domain.</p>
<p style="padding-left:5%;"><?php require 'config.php';
echo "$url";
?><b>/ENTER_THIS_PART</b></p>
<form action="submit-analytics.php" method="POST">
    <input id="url" name="url" type="text" placeholder="Custom Text">
    <button type="submit" value="submit">View Analytics</button>
</form>
<br>
<br>
<br>
<?php include 'inc/footer.php' ?>
</html>