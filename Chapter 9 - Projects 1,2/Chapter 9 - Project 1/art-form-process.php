<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter09-Project01</title>

    <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet">


    <link href="chapter9-project01.css" rel="stylesheet">

</head>

<body>



    <?php include 'art-header.inc.php' ?>

    <div class="container">



        <div class="row">
            <div class="col-md-3">

                <div class="panel panel-default">
                    <div class="panel-heading">Account</div>
                    <div class="panel-body">

                        <ul class="nav nav-pills nav-stacked">
                            <!--Array with loop  <li>menu items here</li>-->
                            <?php
             $Labels = array("Login","Register","Password Recovery","My Account","Returns","Order History");
              $Register = array_search("Register",$Labels);

             foreach($Labels as $value){
              if(array_search($value,$Labels)==1){
                echo "<li class='active'><a href='#'>".$value."</a></li>";
              }
              else{
                echo "<li><a href='#'>".$value."</li>";
              }
            }
             ?>
                        </ul>


                    </div>
                </div>

            </div>
            <div class="col-md-9">

                <div class="page-header">
                    <h2>My Account</h2>
                    <p>Welcome </p>
                </div>

                <div class="well">
                    <!--<p>passed form data here</p>-->
                    <?php
            echo "Email: <b>".$_POST["email"]."</b><br><br>";
            echo "First Name: <b>".$_POST["first"]."</b><br><br>";
            echo "Last Name: <b>".$_POST["last"]."</b><br><br>";
            if (isset($_POST["privacy"])){
              echo "Agreed to private policy? <b>Yes</b>";
            }
            else{
              echo "Agreed to private policy? <b>No</b>";
            }
            ?>
                </div>
            </div>
        </div>


    </div>

    <?php include 'art-footer1.inc.php' ?>

    <script src="bootstrap3_defaultTheme/assets/jquery.js"></script>
    <script src="bootstrap3_defaultTheme/dist/js/bootstrap.min.js"></script>
</body>

</html>
