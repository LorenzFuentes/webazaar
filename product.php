<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/webazaar/resource/php/class/core/init.php';
isLogin();
$user = new User();
$id = $user->data()->id;
if(isset($_POST['add_to_cart'])){

  $product_name = $_POST['product_name'];
  $product_price = $_POST['product_price'];
  $product_image = $_POST['product_image'];
  $product_quantity = $_POST['product_quantity'];

  $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$id'") or die('query failed');

  if(mysqli_num_rows($select_cart) > 0){
     $message[] = 'product already added to cart!';
  }else{
     mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, image, quantity) VALUES('$id', '$product_name', '$product_price', '$product_image', '$product_quantity')") or die('LMAO');
     $message[] = 'product added to cart!';
  }

}; ?>
<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="resource/css/product.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" type="image/x-icon" href="resource/img/logo.png">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/400dff856d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>SHOP | Webazaar</title>

</head>
<body>
    <header id="shop">
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
                  <a class="dropdown-item" href="#women">WOMENS</a>
                  <a class="dropdown-item" href="#men">MENS</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#accesories">ACCESORIES</a>
                </div>
              </li>
              <li class="nav-item pr-3 ">
                <a class="nav-link text-light " href="cart.php">CART</a>
              </li>
              <li class="nav-item pr-3 ">
                <a class="nav-link text-light " href="blog.php">BLOG</a>
              </li>
              <li class="nav-item pr-3 ">
                <a class="nav-link text-light " href="about.html">ABOUT</a>
              </li>
              <li class="nav-item pr-3 ">
                <a class="nav-link text-light " href="contact.php">CONTACT</a>
            </li>
              <li class="nav-item dropdown pr-3 ">
                <a class="nav-link dropdown-toggle text-light " href="#" role="button" data-toggle="dropdown" aria-expanded="false">SETTINGS</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="updateprofile.php">UPDATE PROFILE</a>
                  <a class="dropdown-item" href="changepassword.php">UPDATE PASSWORD</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="logout.php">LOG-OUT</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
          <div class="container">
              <div class="jumbotron jumbotron-fluid text-center head-set">
                  <div class="container animate__fadeInUp">
                      <h1 class="animate__animated animate__fadeInUp header-name" >Top Seller</h1>
                  </div>
                  <div class="top_seller">
                          <a class="text-decoration-none" href="product.php#women" alt="Women">
                              <div class="card">
                                  <div class="wrapper">
                                  <img src="resource/img/topwoman.jpg" class="cover-image" />
                                  </div>
                                  <p class="title">WOMEN</p>
                                  <img src="resource/img/croptop.png" class="character" />
                              </div>
                          </a>
                          <a class="text-decoration-none" href="product.php#men" alt="Men">
                              <div class="card">
                                  <div class="wrapper">
                                  <img src="resource/img/topmen.jpg" class="cover-image" />
                                  </div>
                                  <p class="title">MEN</p>
                                  <img src="resource/img/shirt.png" class="character" />
                              </div>
                          </a>
                          <a class="text-decoration-none" href="product.php#accesories" alt="Accesories">
                              <div class="card">
                                  <div class="wrapper">
                                  <img src="resource/img/topacces.jpg" class="cover-image" />
                                  </div>
                                  <p class="title-2">ACCESORIES</p>
                                  <img src="resource/img/belt.png" class="character" />
                              </div>
                          </a>
                  </div>
              </div>
          </div>
    </header>

<section class="product-section">
  <div class="container">
    <div class="toolbar">
      <h5 class="filter">Filter</h5>
      <ul class="view-options">
        <li>
        </li>
        <li class="show-grid active">
          <button class="prod-btn" disabled>
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/grid-view.svg" alt="grid view">  
          </button>
        </li>
        <li class="show-list">
          <button class="prod-btn">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/list-view.svg" alt="list view">  
          </button>
        </li>
      </ul>
    </div>
    <h1 class="animate__animated animate__fadeInUp header-name" id="men" >MEN PRODUCTS</h1>
    <ol class="image-list grid-view">
    <?php
            $select_product = mysqli_query($conn, "SELECT * FROM `men-products`") or die('query failed');
            if(mysqli_num_rows($select_product) > 0){
            while($fetch_product = mysqli_fetch_assoc($select_product)){
        ?>
    <form method="post" action="">
      <li>
        <figure>
          <img src="images/<?php echo $fetch_product['image']; ?>" class="images" alt="">
          <div class="caption">
            <p class="name"><?php echo $fetch_product['name']; ?></p>
            <p class="descp"><?php echo $fetch_product['description']; ?></p>
            <br>
            <p class="price">₱<?php echo $fetch_product['price']; ?></p>
            <button type="submit" value="Add to Cart" name="add_to_cart" class="custom-btn btn-3"><span>Add to Cart</span></button>
            <input type="hidden" min="1" name="product_quantity" value="1">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
          </div>
        </figure>
      </li>
    </form>
        <?php
              };
          };
          ?>
    <h1 class="animate__animated animate__fadeInUp header-name" id="women" >Women Products</h1>
      <?php
              $select_product = mysqli_query($conn, "SELECT * FROM `women-products`") or die('query failed');
              if(mysqli_num_rows($select_product) > 0){
              while($fetch_product = mysqli_fetch_assoc($select_product)){
          ?>
    <form method="post" action="">
      <li>
        <figure>
          <img src="images/<?php echo $fetch_product['image']; ?>" class="images" alt="">
          <div class="caption">
            <p class="name"><?php echo $fetch_product['name']; ?></p>
            <p class="descp"><?php echo $fetch_product['description']; ?></p>
            <br>
            <p class="price">₱<?php echo $fetch_product['price']; ?></p>
            <button type="submit" value="Add to Cart" name="add_to_cart" class="custom-btn btn-3"><span>Add to Cart</span></button>
            <input type="hidden" min="1" name="product_quantity" value="1">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
          </div>
        </figure>
      </li>
    </form>
        <?php
              };
          };
          ?>
    <h1 class="animate__animated animate__fadeInUp header-name" id="accesories" >Accesories</h1>
    <?php
            $select_product = mysqli_query($conn, "SELECT * FROM `accesories`") or die('query failed');
            if(mysqli_num_rows($select_product) > 0){
            while($fetch_product = mysqli_fetch_assoc($select_product)){
        ?>
    <form method="post" action="">
      <li>
        <figure>
          <img src="images/<?php echo $fetch_product['image']; ?>" class="images" alt="">
          <div class="caption">
            <p class="name"><?php echo $fetch_product['name']; ?></p>
            <p class="descp"><?php echo $fetch_product['description']; ?></p>
            <br>
            <p class="price">₱<?php echo $fetch_product['price']; ?></p>
            <button type="submit" value="Add to Cart" name="add_to_cart" class="custom-btn btn-3"><span>Add to Cart</span></button>
            <input type="hidden" min="1" name="product_quantity" value="1">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
          </div>
        </figure>
      </li>
      </form>
        <?php
              };
          };
          ?>
    </ol>
  </div>
</section>


<footer class="text-center footer text-center">
    <div class="container">
        <div class="row text-md-start">
          <div class="col-md-4">
            <img src="resource/img/logoweb.png" height="100" width="150" alt="">
            <p class=" text-center">
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</a>
            </p>
          </div>
          <div class="col-md-3">
           <h5 class="pb-3">CATEGORIES </h5>
            <ul class="list-style ps-0 ">
              <li class="pb-3">WOMEN CLOTHING</li>
              <li class="pb-3">MEN CLOTHING</li>
            </ul>
          </div>
          <div class="col-md-3 ">
           <h5 class="pb-3">ACCESORIES </h5>
            <ul class="list-style ps-0">
              <li class="pb-3">WATCH</li>
              <li class="pb-3">BELT</li>
              <li class="pb-3">BAG</li>
            </ul>
          </div>
          <div class="col-md-2 ">
           <h5 class="pb-3"> OTHERS </h5>
            <ul class="list-style ps-0">
              <li class="pb-3">BLOG</li>
              <li class="pb-3">CART</li>
              <li class="pb-3">ABOUT</li>
              <li class="pb-3">CONTACT</li>
            </ul>
          </div>
        </div>
    </div>
    <div class="text-center mb-3">
       <h5 class=" text-center">
        WE ACCEPT
      </h5>
      <a href="#">
        <img src="resource/img/icons/icon-pay-01.png" alt="ICON-PAY">
      </a>

      <a href="#">
        <img src="resource/img/icons/icon-pay-02.png" alt="ICON-PAY">
      </a>

      <a href="#">
        <img src="resource/img/icons/icon-pay-03.png" alt="ICON-PAY">
      </a>

      <a href="#">
        <img src="resource/img/icons/icon-pay-04.png" alt="ICON-PAY">
      </a>

      <a href="#">
        <img src="resource/img/icons/icon-pay-05.png" alt="ICON-PAY">
      </a>
    </div>
  </footer>

  <div class="return">
        <a href="#shop"><i class="fa-solid fa-bag-shopping"></i></a>
        <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
  </div>

  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
  <script  src="resource/js/product.js"></script>
  <script src="vendor/animsition/js/animsition.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

</body>
</html>