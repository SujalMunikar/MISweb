<?php
 /*
Source code for table order in database:
CREATE TABLE `order` (`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,`name` varchar(255) NOT NULL, `number` varchar(10) NOT NULL,`email` varchar(255) NOT NULL, `method` varchar(255) NOT NULL, `house_no` varchar(255) NOT NULL,`street` varchar(100) NOT NULL,`city` varchar(100) NOT NULL,`state` varchar(100) NOT NULL,
 `country` varchar(100) NOT NULL,`pin_code` int(100) NOT NULL,`total_products` varchar(255) NOT NULL, `total_price` varchar(255) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
 */
@include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>checkout</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<section class="checkout-form">
   <h1 class="heading">complete your order</h1>
   <form action="" method="post">
   <div class="display-order">
      <?php
      
      ?>
      <span class="grand-total"> grand total : $<?= $grand_total; ?>/- </span>
   </div>
      <div class="flex">
         <div class="inputBox">
            <span>your name</span>
            <input type="text" placeholder="Name" name="name" required>
         </div>
         <div class="inputBox">
            <span>your number</span>
            <input type="number" placeholder="Phone Number" name="number" required>
         </div>
         <div class="inputBox">
            <span>your email</span>
            <input type="email" placeholder="Email" name="email" required>
         </div>
         <div class="inputBox">
            <span>payment method</span>
            <select name="method">
               <option value="cash on delivery" selected>cash on devlivery</option>
               <option value="credit cart">credit cart</option>
               <option value="esewa">esewa</option>
            </select>
         </div>
         <div class="inputBox">
            <span>House Number</span>
            <input type="text" placeholder="" name="house_no" required>
         </div>
         <div class="inputBox">
            <span>City</span>
            <input type="text" placeholder="" name="city" required>
         </div>
         <div class="inputBox">
            <span>Street</span>
            <input type="text" placeholder="" name="street" required>
         </div> <div class="inputBox">
            <span>State</span>
            <input type="text" placeholder="" name="state" required>
         </div>
         <div class="inputBox">
            <span>country</span>
            <input type="text" placeholder="" name="country" required>
         </div>
         <div class="inputBox">
            <span>pin code</span>
            <input type="text" placeholder="" name="pin_code" required>
         </div>
      </div>
      <input type="submit" value="order now" name="order_btn" class="btn">
   </form>
</section>
</div>
<!-- custom js file link  -->
<script src="js/script.js"></script> 
</body>
</html>