<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; 
   charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Travel</title>

    <link rel="shortcut icon" href="../../assets/ico/favicon.png">
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,800,600,700,300' rel='stylesheet' type='text/css'>


    <link href="bootstrap3_travelTheme/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="bootstrap3_travelTheme/theme.css" rel="stylesheet">

</head>

<body>

    <header>
        <div id="topHeaderRow">
            <div class="container">
                <div class="pull-right">
                    <ul class="list-inline">
                        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-star"></span> Favorites</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="navbar navbar-default ">
            <div class="container">
                <nav>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
             </button>
                        <a class="navbar-brand" href="#">Share Your Travels</a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="#">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Browse <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Posts</a></li>
                                    <li><a href="#">Images</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Countries</a></li>
                                    <li><a href="#">Users</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>


    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Search</div>
                    <div class="panel-body">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="search ...">
                                <span class="input-group-btn">
                    <button class="btn btn-warning" type="button"><span class="glyphicon glyphicon-search"></span>
                                </button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="panel panel-info">
                    <div class="panel-heading">Continents</div>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="#">Africa</a></li>
                        <li class="list-group-item"><a href="#">Asia</a></li>
                        <li class="list-group-item"><a href="#">Europe</a></li>
                        <li class="list-group-item"><a href="#">North America</a></li>
                        <li class="list-group-item"><a href="#">Oceania</a></li>
                        <li class="list-group-item"><a href="#">South America</a></li>
                    </ul>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading">Popular Countries</div>
                    <ul class="list-group">

                        <li class="list-group-item">
                            <a href="country.php?code=CA">Canada</a>
                        </li>

                        <li class="list-group-item">
                            <a href="country.php?code=DE">Germany</a>
                        </li>

                        <li class="list-group-item">
                            <a href="country.php?code=GH">Ghana</a>
                        </li>

                        <li class="list-group-item">
                            <a href="country.php?code=GB">United Kingdom</a>
                        </li>

                        <li class="list-group-item">
                            <a href="country.php?code=US">United States</a>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="col-md-9">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Browse</a></li>
                    <li class="active">Favorites</li>
                </ol>

                <h1>Favorites</h1>

                <div class="well">
                    <div class="row">
                        <?php
              include "travel-data.php";
              foreach($images as $value){
              echo '<div class="col-md-3">';
              echo '<a href="travel-image.php?id='.$value['id'].'" class="thumbnail">';
              echo '<img src="'.$value['path'].'" alt="...">';
              echo '</a></div>';
            }
              ?>
                    

                    </div>
                </div>


            </div>
            <!-- end main content column -->
        </div>
        <!-- end main content row -->
    </div>
    <!-- end main content container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4>Destinations</h4>
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="#">Asia</a></li>
                        <li><a href="#">Africa</a></li>
                        <li><a href="#">Europe</a></li>
                        <li><a href="#">North America</a></li>
                        <li><a href="#">South America</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>Links</h4>
                    <nav>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Browse</a></li>
                            <li><a href="#">Search</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-4">
                    <h4>Connect</h4>
                    <hr/>
                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-primary">Facebook</button>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-info">Twitter</button>
                        </div>
                    </div>
                    <hr/> Phone: 333-444-5555</br>
                    Email: support@shareyourtravels.com
                </div>
            </div>

        </div>
        <div class="container">
            <hr/>
            <div class="row">
                <div class="col-md-6">
                    <p><small>&copy; 2014 - Share Your Travels</small></p>
                </div>
                <div class="col-md-6">
                    <p class="pull-right"><small>A case study for <a href="http://www.fundwebdev.com">Fundamentals of Web Development</a><small></p>

                </div>
            </div>
        </div>

    </footer>


    <script src="bootstrap3_travelTheme/assets/js/jquery.js"></script>
 <script src="bootstrap3_travelTheme/dist/js/bootstrap.min.js"></script>
 <script src="bootstrap3_travelTheme/assets/js/holder.js"></script>

</body>

</html>
