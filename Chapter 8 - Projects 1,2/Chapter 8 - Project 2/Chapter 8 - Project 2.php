<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Chapter08-Project02</title>
   <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet">

   <link href="Chapter 8 - Project 2.css" rel="stylesheet">
</head>

<body>

<?php
include "art-header.php";
?>

<div class="container">

      <div class="page-header">
         <h2>View Cart</h2>
      </div>
         
      <table class="table table-condensed">
         <tr>
            <th>Image</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Amount</th>
         </tr>
        <?php
        function outputCartRow($file, $product, $quantity, $price){
          echo '<td><img class="img-thumbnail" src="'.$file.'" alt="..."></td>';
          echo "<td>".$product."</td>";
          echo "<td>".$quantity."</td>";
          echo "<td>$".number_format($price,2)."</td>";
          echo "<td>$".number_format($quantity*$price,2)."</td>";
        }

        ?>
         <tr>
         <?php
         include "art-data.php";
         outputCartRow($file1,$product1,$quantity1,$price1);
         ?>
            <!-- php code that replaces this with outputCartRow function
            <td><img class="img-thumbnail" src="116010.jpg" alt="..."></td>
            <td>Artist Holding a Thistle</td>
            <td>2</td>
            <td>$500</td>
            <td>$1000</td>-->
         </tr>
         <tr>
          <?php
          outputCartRow($file2,$product2,$quantity2,$price2);
          ?>
           <!-- <td><img class="img-thumbnail" src="113010.jpg" alt="..."></td>
            <td>Self-portrait in a Straw Hat</td>
            <td>1</td>
            <td>$700</td>
            <td>$700</td>-->
         </tr> 
         <tr class="success strong">
            <td colspan="4" class="moveRight">Subtotal</td>
          <!--The <td> with prices are going to be replaced with php code-->
            <?php $subtotal = ($quantity1 * $price1) + ($quantity2 * $price2);
            echo"<td>$".number_format($subtotal,2)."</td>";
            ?>
         </tr>
         <tr class="active strong">
            <td colspan="4" class="moveRight">Tax</td>
            <?php $tax = $subtotal * (1/10);
            echo"<td>$".number_format($tax,2)."</td>";
            ?>
           
         </tr>  
         <tr class="strong">
            <td colspan="4" class="moveRight">Shipping</td>
            <?php if($subtotal >= 2000){
              $shipping = number_format("0",2);
            }else{
              $shipping = number_format("100",2);
            }
            echo "<td>$".$shipping."</td>";
            ?>
           
         </tr> 
         <tr class="warning strong text-danger">
            <td colspan="4" class="moveRight">Grand Total</td>
            <?php $total = $subtotal + $tax + $shipping;
            echo "<td>$".number_format($total,2)."</td>";
            ?>
           
         </tr>    
         <tr >
            <td colspan="4" class="moveRight"><button type="button" class="btn btn-primary" >Continue Shopping</button></td>
            <td><button type="button" class="btn btn-success" >Checkout</button></td>
         </tr>
      </table>         

</div> 

<?php
include "art-footer.php";
?>

    <script src="bootstrap3_defaultTheme/assets/js/jquery.js"></script>
    <script src="bootstrap3_defaultTheme/dist/js/bootstrap.min.js"></script>    
  </body>
</html>
