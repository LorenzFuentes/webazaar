<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/webazaar/resource/php/class/core/init.php';
isLogin();
$user = new User();
$id = $user->data()->id;
if(isset($_POST['update_cart'])){
   $update_quantity = $_POST['cart_quantity'];
   $update_id = $_POST['cart_id'];
   mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_quantity' WHERE id = '$update_id'") or die('query failed');
   $message[] = 'cart quantity updated successfully!';
}

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'") or die('query failed');
   header('location:cart.php');
}
  
if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$id'") or die('query failed');
   header('location:cart.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="resource/css/cart.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" type="image/x-icon" href="resource/img/logo.png">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/400dff856d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>CART | Webazaar</title>
</head>
<header>
      <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler navbar-light text-center" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon  text-center"></span>
        </button>
        <div class="collapse navbar-collapse align-items-center justify-content-center" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item pr-3 ">
              <a class="nav-link text-light" href="index.php">HOME</a>
            </li>
            <li class="nav-item dropdown pr-3 ">
              <a class="nav-link dropdown-toggle text-light " href="product.php" role="button" data-toggle="dropdown" aria-expanded="false">SHOP</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="product.php#women">WOMENS</a>
                <a class="dropdown-item" href="product.php#men">MENS</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="product.php#accesories">ACCESORIES</a>
              </div>
            </li>
            <li class="nav-item pr-3 ">
              <a class="nav-link text-light " href="cart.php">CART</a>
            </li>
            <li class="nav-item pr-3 ">
              <a class="nav-link text-light ">BLOG</a>
            </li>
            <li class="nav-item pr-3 ">
              <a class="nav-link text-light ">ABOUT</a>
            </li>
            <li class="nav-item pr-3 ">
              <a class="nav-link text-light ">CONTACT</a>
            </li>
            <li class="nav-item dropdown pr-3 ">
              <a class="nav-link dropdown-toggle text-light " href="#" role="button" data-toggle="dropdown" aria-expanded="false">SETTINGS</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="updateprofile.php">UPDATE PROFILE</a>
                <a class="dropdown-item" href="changepassword.php">UPDATE PASSWORD</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item"  href="logout.php">LOG-OUT</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div id="app">
</header>
<!-- End Header -->
<!-- Product List -->
<div class="text-header">
  <h1 class="animate__animated animate__fadeInUp header-name">Shopping Cart</h1>
</div>
<table>
  <tbody>
    <?php
          $cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$id'") or die('query failed');
          $grand_total = 0;
          if(mysqli_num_rows($cart_query) > 0){
            while($fetch_cart = mysqli_fetch_assoc($cart_query)){
          ?>
    <tr>
      <section class="container">
        <div v-if="products.length > 0">
          <ul class="products">
          <li class="row">
            <div class="col left">
              <div class="thumbnail">
                <img src="images/<?php echo $fetch_cart['image']; ?>" height="100" alt="">
              </div>
              <div class="detail">
                <div class="name"><?php echo $fetch_cart['name']; ?></div>
                <div class="price">₱<?php echo $fetch_cart['price']; ?></div>
                <div>
                  <form action="" method="post">
                    <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">
                    <div class="number">
                        <span class="minus">-</span>
                        <input class="select" type="number" min="1" name="cart_quantity" value="<?php echo $fetch_cart['quantity']; ?>">
                        <span class="plus">+</span>
                    </div>
                    <input type="submit" name="update_cart" value="update" class="option-btn">
                    <?php $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?>
                  </form> 
                </div>
              </div>
            </div>

            <div class="col right">
              <div class="quantity">
              </div>
              
              <div class="remove">
                  <a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" class="delete-btn"><svg version="1.1" class="close" xmlns="//www.w3.org/2000/svg" xmlns:xlink="//www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" enable-background="new 0 0 60 60" xml:space="preserve"><polygon points="38.936,23.561 36.814,21.439 30.562,27.691 24.311,21.439 22.189,23.561 28.441,29.812 22.189,36.064 24.311,38.186 30.562,31.934 36.814,38.186 38.936,36.064 32.684,29.812"></polygon></svg></a>
              </div>
            </div>
          </li>
        </ul>
        </div>
      </section>
    </tr>
    <?php
              $grand_total += $sub_total;
                }
              }else{
                echo '<div class="text-header">
                <h1 class="animate__animated animate__fadeInUp header-name2">No Item Added</h1>
              </div>  ';
              }
          ?>
  </tbody>
</table>
<!-- End Product List -->

<!-- Summary -->


<section class="checkout-footer container" v-if="products.length > 0">
  <div class="summary">
    <ul>
      <li class="total"><span class="text-total"> Total : </span><span>₱<?php echo $grand_total; ?></span></li>
    </ul>
  </div>
  <div class="checkout">
    <button class="button" type="button">Check Out</button>  
  </div>
</section>
<!-- End Summary -->

    <script src="vendor/animsition/js/animsition.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script><script  src="resource/js/cart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

</body>
</html>