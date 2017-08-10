<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter08-Project01</title>

   
    <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet">

    
    <link href="Chapter 8 - Project 1.css" rel="stylesheet">

</head>
<?php include 'book-data.php';?>

<?php
$name_E = $email_E = $password_E = "";
$name = $email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "GET") {

if (empty($_POST["email"])) {
    $email_E = "Email is required";
}

if (empty($_POST["password"])) {
    $gender_E = "Password is required";
}
}
?>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <div id="login">
                        <div class="page-header">
                            <h2>Login</h2>
                        </div>
                        <form role="form">
                            <div class="form-group has-error">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" name="email" value="<?php echo htmlentities($email) ?>">
                                <p class="help-block">
                                    <?php echo $password_E; ?>
                                </p>
                            </div>
                            <div class="form-group has-error">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" name="password" value="<?php echo htmlentities($password) ?>">
                                <p class="help-block">
                                    <?php echo $password_E; ?>
                                </p>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Server</label>
                                <select name="server" class="form-control">
                <?php

                   for($i=1; $i<=4; $i++)
                       {

                           echo "<option value=".$i.">".$i."</option>";
                       }
                ?>
                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-3">
                </div>
            </div>
        </div>
        
        <script src="bootstrap3_defaultTheme/assets/js/jquery.js"></script>
        <script src="bootstrap3_defaultTheme/dist/js/bootstrap.min.js"></script>
    </body>

</html>
