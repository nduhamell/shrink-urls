<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #000;
   color: white;
   text-align: left;
}
.github-button {
  padding-left: 5%;
  background-color: #e5e5e5; /* Green */
  border: solid 2px #000000;
  color: black;
  padding: 3px 7px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
}
button:hover {
background-color: #ffffff;
}
</style>
</head>
<body>
<div class="footer">
<p style="padding-left:5%;"> &#169; <?php require 'config.php';
echo "$year $websitename";
?>
</p>
<a style="margin-left:5%;" target="_blank" href="https://github.com/nduhamell/shrink-urls"><button class="github-button" syle="font-size:14px;">View on <i class="fa fa-github"></i></button></a>
<br>
<br>
</div>
</body>
</html> 
