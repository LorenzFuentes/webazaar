<?php
    require_once 'resource/php/require.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="resource/css/contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" type="image/x-icon" href="resource/img/logo.png">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/400dff856d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="shorten.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,400;1,900&display=swap" rel="stylesheet">
    <meta content="" name="keywords">
    <title>CONTACT | Webazaar</title>
      </head>
      <body>
        <nav class="navbar navbar-expand-lg navbar-dark">
          <button class="navbar-toggler text-center" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon  text-center"></span>
          </button>
          <div class="collapse navbar-collapse align-items-center justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item pr-3 ">
                <a class="nav-link text-light" href="index.php">HOME</a>
              </li>
              <li class="nav-item dropdown pr-3 ">
                <a class="nav-link dropdown-toggle text-light " href="#" role="button" data-toggle="dropdown" aria-expanded="false">SHOP</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="product#women.php">WOMENS</a>
                  <a class="dropdown-item" href="product#men.php">MENS</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="product#accesories.php">ACCESORIES</a>
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
                <a class="nav-link dropdown-toggle text-light " hre f="#" role="button" data-toggle="dropdown" aria-expanded="false">SETTINGS</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="updateprofile.php">UPDATE PROFILE</a>
                  <a class="dropdown-item" href="changepassword.php">UPDATE PASSWORD</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">LOG-OUT</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>

        <section id="contact">
  
          <div class="p-3 text-center container animate__fadeInUp">
            <h1 class="animate__animated animate__fadeInUp header-name" >CONTACT</h1>
          </div>
          
          <div class="contact-wrapper">
          
          <!-- Left contact page --> 
            
            <form id="contact-form" class="form-horizontal" role="form" method="POST">
               
              <div class="form-group">
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="" required>
                </div>
              </div>
        
              <div class="form-group">
                <div class="col-sm-12">
                  <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="" required>
                </div>
              </div>
        
              <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message" required></textarea>
              
              <button class="btn send-button" id="submit" name="email-send" type="submit" value="SEND">
                <div class="alt-send-button">
                  <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
                </div>
              
              </button>
              <?php email() ; ?>
            </form>
            
          <!-- Left contact page --> 
            
              <div class="direct-contact-container">
        
                <ul class="contact-list">
                  <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">Malolos, Bulacan</span></i></li>
                  
                  <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone">(000) 000-0000</span></i></li>
                  
                  <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail">webazaar123@gmail.com</span></i></li>
                  
                </ul>
        
                <hr>
                <ul class="social-media-list">
                  <li><a href="#" target="_blank" class="contact-icon">
                    <i class="fa fa-github" aria-hidden="true"></i></a>
                  </li>
                  <li><a href="#" target="_blank" class="contact-icon">
                    <i class="fa fa-facebook" aria-hidden="true"></i></a>
                  </li>
                  <li><a href="#" target="_blank" class="contact-icon">
                    <i class="fa fa-twitter" aria-hidden="true"></i></a>
                  </li>
                  <li><a href="#" target="_blank" class="contact-icon">
                    <i class="fa fa-instagram" aria-hidden="true"></i></a>
                  </li>       
                </ul>
                <hr>
        
                <div class="copyright">&copy; ALL OF THE RIGHTS RESERVED</div>
        
              </div>
            
          </div>
          
        </section>  

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/074b9b92a6.js" crossorigin="anonymous"></script>


  </body>
</html>