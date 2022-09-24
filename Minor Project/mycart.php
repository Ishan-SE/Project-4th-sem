<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paskim</title>
  <!--  Links  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!--  NABBAR  -->
<section class="nab-bar">
    <div class="container">
        <div class="image">
            <img src="./image/logo/logo.png" alt="Logo image" style="width: 70px; height: 65px;">
    </div>
    
       <div>
     <div class="nab-menu text-right">
      <ul>
        <li> <a href="./index.html">Home</a>  </li>
        <li> <a href="./about.html">About</a>  </li>
        <li> <a href="./foods.html">Foods</a>  </li>
        <li> <a href="./mycart.php" class="btn btn-outline-success">My Cart</a>  </li>
        <li> <a href="./admin/login.php">Log-in</a>  </li>
      </ul>
    </div>
    <div class="space-fix"></div>
    </div>
</section>


<table>
  <tr>
    <th>S no.</th>
    <th>Item Name</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Remove</th>
  </tr>
 <?php
 $total=0;
 if(isset($_SESSION['Cart']))
 {
 foreach ($_SESSION['Cart'] as $key => $value) {
  $total=$total+$value['Price'];
  $sr=$key+1;
   echo"
   <tr>
   <td>$sr</td>
   <td>$value[Item_Name]</td>
   <td>$value[Price]</td>
   <td>
   
   <input type='number' value='$value[Quantity]' min='1' max='10'>
   
   </td>
   <td>
   <form action='manage_cart.php' method='POST')>
   <button name='Remove_Item'>REMOVE</button>
   <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
   </form>
   </td>
   </tr>
   ";
 }
}
 ?>
</table>

<div>
<h3>Total:</h3>
<h5><?php echo $total ?></h5>
<form>
  <button class="button btn-primary">Place Order</button>
</form>
  </div>




</body>
</html>
