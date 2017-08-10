<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4><span class="glyphicon glyphicon-info-sign"></span> About Us</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            </div>
            <div class="col-md-3">
                <h4><span class="glyphicon glyphicon-earphone"></span> Customer Service</h4>
                <ul class="nav nav-stacked">
                    <li><a href="#">Delivery Information</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Shipping</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                </ul>
            </div>
            <?php
         //Array will be put here

            $recentOrders = array();
            $recentOrders[] = array("filename" => "images/art/tiny/113010.jpg", "title" => "Self-portrait in a Straw Hat", "time" => 9);
            $recentOrders[] = array("filename" => "images/art/tiny/099110.jpg", "title" => "The Veiled Woman", "time" => 25);
              $recentOrders[] = array("filename" => "images/art/tiny/116010.jpg", "title" => "Artist Holding a Thistle", "time" => 41);
         ?>
                <div class="col-md-3">
                    <h4><span class="glyphicon glyphicon-shopping-cart"></span> Just Ordered</h4>
                    <?php
            
            foreach($recentOrders as $value){
              //loop for the format of the image
              echo "<div class='media'>";
              echo "<a class='pull-left' href='#''>";
              echo '<img class="media-object" src="'.$value["filename"].'" alt="..."> </a>';
              echo "<div class='media-body'>";
              echo "<p class='media-heading similarTitle'><a href='#''>".$value["title"]."</a></p>";
              echo "<em>".$value["time"]." minutes ago</em>";
              echo "</div> </div>";
              
            }
            ?>

                </div>
                <div class="col-md-3">
                    <h4><span class="glyphicon glyphicon-envelope"></span> Contact us</h4>
                    <form role="form">
                        <div class="form-group tight-form-group">
                            <label class="sr-only" for="name">Name</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter name ...">
                        </div>
                        <div class="form-group tight-form-group">
                            <label class="sr-only" for="email">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter email ...">
                        </div>
                        <div class="form-group tight-form-group">
                            <label class="sr-only" for="email">Email</label>
                            <textarea class="form-control" rows="3" placeholder="Enter message ..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>

        </div>
    </div>

    <div id="copyrightRow">
        <div class="container">
            <div class="row">
                <p class="text-muted">All images are copyright to their owners. This is just a hypothetical site
                    <span class="pull-right">&copy; 2014 Copyright Art Store</span></p>
            </div>
        </div>
    </div>
</footer>
