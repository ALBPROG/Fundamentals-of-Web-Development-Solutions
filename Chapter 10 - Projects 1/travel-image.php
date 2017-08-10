<?php

include 'travel-data.php';   

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; 
   charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Travel Template</title>

        <link rel="shortcut icon" href="favicon.png">

        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,800,600,700,300' rel='stylesheet' type='text/css'>

        <link href="bootstrap3_travelTheme/dist/css/bootstrap.min.css" rel="stylesheet">
       
        <link href="bootstrap3_travelTheme/theme.css" rel="stylesheet">

    </head>

    <body>

        <?php include 'travel-header.php'; ?>

        <div class="container">
           
            <div class="row">
                
                <div class="col-md-3">
                    <!-- start left navigation rail column -->
                    <?php include 'travel-left-rail.php'; ?>
                </div>
              

                <div class="col-md-9">
                    <!-- start main content column -->
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="Chapter09-project02.php">Favorites</a></li>
                        <li class="active">title here</li>
                    </ol>


                    <div class="row">
                        <div class="col-md-8">
                            <h1>
                                <?php 
         //Getting the Query string by $_GET
         if($_GET["id"]== "22"){
          echo '<img src = "images/travel/medium/6114850721.jpg" alt="...">';
          }
          else if($_GET["id"]=="54"){
            echo '<img src = "images/travel/medium/9495574327.jpg" alt="...">';
            }
          else if($_GET["id"]=="7"){
            echo '<img src = "images/travel/medium/5856697109.jpg" alt="...">';
            }
          else if($_GET["id"]=="19"){
            echo '<img src = "images/travel/medium/5855729828.jpg" alt="...">';
            }
          else if($_GET["id"]=="46"){
            echo '<img src = "images/travel/medium/8711645510.jpg" alt="...">';
            } 
          else if($_GET["id"]=="6"){
            echo '<img src = "images/travel/medium/6114907897.jpg" alt="...">';
            } ?></h1>

                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-primary">
                                <div class="panel-body">
                                    <?php 
                  //Conditions for different descriptions
                     if($_GET["id"]=="22") {
                      echo '<p>By <a href="#">By '.$images[22]["user"].'</a></p>';
                  echo '<p>Taken in <a href="#">Taken in '.$images[22]["country"].'</a></p>';
                  echo '<p>'.$images[22]["description"].'</p>';
                }
                else if($_GET["id"]=="54") {
                      echo '<p>By <a href="#">By '.$images[54]["user"].'</a></p>';
                  echo '<p>Taken in <a href="#">Taken in '.$images[54]["country"].'</a></p>';
                  echo '<p>'.$images[54]["description"].'</p>';
                }
                else if($_GET["id"]=="7") {
                      echo '<p>By <a href="#">By '.$images[7]["user"].'</a></p>';
                  echo '<p>Taken in <a href="#">Taken in '.$images[7]["country"].'</a></p>';
                  echo '<p>'.$images[7]["description"].'</p>';
                }
                else if($_GET["id"]=="19") {
                      echo '<p>By <a href="#">By '.$images[19]["user"].'</a></p>';
                  echo '<p>Taken in <a href="#">Taken in '.$images[19]["country"].'</a></p>';
                  echo '<p>'.$images[19]["description"].'</p>';
                }
                else if($_GET["id"]=="46") {
                      echo '<p>By <a href="#">By '.$images[46]["user"].'</a></p>';
                  echo '<p>Taken in <a href="#">Taken in '.$images[46]["country"].'</a></p>';
                  echo '<p>'.$images[46]["description"].'</p>';
                }
                else if($_GET["id"]=="6") {
                      echo '<p>By <a href="#">By '.$images[6]["user"].'</a></p>';
                  echo '<p>Taken in <a href="#">Taken in '.$images[6]["country"].'</a></p>';
                  echo '<p>'.$images[6]["description"].'</p>';
                }
                  ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <?php include 'travel-footer.php'; ?>

        <script src="bootstrap3_travelTheme/assets/js/jquery.js"></script>
        <script src="bootstrap3_travelTheme/assets/js/holder.js"></script>
    </body>

    </html>
