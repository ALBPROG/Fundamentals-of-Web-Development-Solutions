<?php

include 'travel-data.classes.php';   

asort($continents);
asort($countries);


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

   <link rel="shortcut icon" href="../../assets/ico/favicon.png">

   <!-- Google fonts used in this theme  -->
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
         <?php include 'travel-left-rail.php'; ?>
      </div>  <!-- end left navigation rail --> 
      
      <div class="col-md-9">  <!-- start main content column -->
         <ol class="breadcrumb">
           <li><a href="#">Home</a></li>
           <li><a href="#">Browse</a></li>
           <li class="active">Favorites</li>
         </ol>          

           <h1>Favorites</h1>
       
         <div class="well">
            <div class="row">
               <?php foreach ($images as $img) { ?>
            
                  <div class="col-md-3">
                     <a href="travel-image.php?id=<?php echo $img['id']; ?>" class="thumbnail">
                     <img src="images/travel/square/<?php echo $img['path']; ?>" alt="...">
                     </a>
                  </div>

               <?php } ?>
            </div>
         </div>


      </div> 
   </div>  
</div>   
   
<?php include 'travel-footer.php'; ?>   

 <script src="bootstrap3_travelTheme/assets/js/jquery.js"></script>
 <script src="bootstrap3_travelTheme/dist/js/bootstrap.min.js"></script>
 <script src="bootstrap3_travelTheme/assets/js/holder.js"></script>
</body>
</html>