<?php
session_start();
if(!(($_SESSION["id"])&&($_SESSION["type"]=='L3')))
{
   header("Location:index.php");
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Example</title>
  
  
</head>
<body>
<div id="wrapper">
<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#"><?php echo $adminname; ?></a>
</div>
<div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">Welcome<b> <?php echo "User"; ?></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="../logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>

</body>
</html