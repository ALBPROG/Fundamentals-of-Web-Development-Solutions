<?php
session_start();
if(count($_POST)>0)
{
   include("db_config.php");
       $userid=mysql_real_escape_string($_POST["id"]);
       $pass=mysql_real_escape_string($_POST["password"]);

           $result = mysql_query("SELECT * FROM admin WHERE UserID='$userid' and Password = '$pass'");
           $row = mysql_fetch_array($result);
           if(is_array($row))
           {
                   $_SESSION["id"] = $row['UserID'];
  
                  
                   header("Location:external.php");
                  
           }
           else
           {
                   header("Location:fail.php");
           }
}

else
{
   header("Location:fail.php");
}
?>