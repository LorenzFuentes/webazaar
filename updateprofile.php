<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/webazaar/resource/php/class/core/init.php';
isLogin();
$view = new view;
$user = new user();
 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" type="image/x-icon" href="resource/img/logo.png">
   <title>Update Profile</title>
   <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
   <link href="vendor/css/all.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css"  href="resource/css/updateprof.css">
   <link rel="stylesheet" type="text/css"  href="resource/css/speech.css">
   <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap-select.min.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
   <script src="https://kit.fontawesome.com/400dff856d.js" crossorigin="anonymous"></script>

 </head>
 <body>

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
                <a class="nav-link text-light " href="about.html">ABOUT</a>
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
                  <a class="dropdown-item" href="logout.php">LOG-OUT</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
    <div class="container mt-5 pt-5">
        <?php updateProfile();?>

        <h1 class="text-center text-dark mt-4"  id="heading">UPDATE YOUR ACCOUNT</h1>
        <hr>
        <div class="row">
        <div class="col-md mt-5">
          <form action="" method="post">
            <div class="form-row">
                <div class="col">
                <input class="form-control"  type = "text" name="username" id="username" value ="<?php echo escape($user->data()->username); ?>" placeholder="Username" autocomplete="off"  />
                </div>
                <div class="col">

                <input class="form-control"  type = "text" name="fullName" id="fullName" value ="<?php echo escape($user->data()->name); ?>" placeholder="Full Name">
                </div>
                <div class="col">
                <input class="form-control"  type = "text" name="email" id="email" value ="<?php echo escape($user->data()->email); ?>" placeholder="Email">
                </div>
            </div>
            <div class="row justify-content-center">
              <div class="form-group col-5">
                      <label  >&nbsp;</label>
                  <input type="hidden" name ="Token" value="<?php echo Token::generate();?>" />
                  <input type="submit" value="Update your profile" class=" form-control btn btn-2" />
                  </div>
              </div>
            </form>
        </div>
        </div>
      </div>
    <div class="wave">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
          <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
      </svg>
  </div>
 </body>
     <script src="vendor/js/jquery.js"></script>
     <script src="vendor/js/popper.js"></script>
     <script src="vendor/js/bootstrap.min.js"></script>
     <script src="vendor/js/bootstrap-select.min.js"></script>
     <script src="resource/js/changepass.js"></script>
 </body>
 </html>