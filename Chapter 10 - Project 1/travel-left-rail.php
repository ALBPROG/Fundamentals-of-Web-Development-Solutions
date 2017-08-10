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
               <?php foreach ($continents as $continent) { ?>
                  <li class="list-group-item"><a href="#"><?php echo $continent; ?></a></li>
               <?php } ?>
           </ul>
         </div>   
         <div class="panel panel-info">
           <div class="panel-heading">Popular Countries</div>
           <ul class="list-group">      
               <?php foreach ($countries as $key => $value) { ?>           
                  <li class="list-group-item">
                  <a href="country.php?code=<?php echo $key; ?>"><?php echo $value; ?></a>
                  </li>
               <?php } ?>
  
           </ul>
         </div>  <!-- end countries panel -->    