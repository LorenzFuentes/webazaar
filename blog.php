<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/webazaar/resource/php/class/core/init.php';
isLogin();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="resource/css/blog.css">
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
  <title>BLOG | Webazaar</title>
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header1>
      <nav class="navbar navbar-expand-lg navbar-dark">
        <button class="navbar-toggler text-center" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon  text-center"></span>
        </button>
        <div class="collapse navbar-collapse align-items-center justify-content-center" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item pr-3 ">
              <a class="nav-link text-dark" href="index.php">HOME</a>
            </li>
            <li class="nav-item dropdown pr-3 ">
              <a class="nav-link dropdown-toggle text-dark " href="#" role="button" data-toggle="dropdown" aria-expanded="false">SHOP</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="product#women.php">WOMENS</a>
                <a class="dropdown-item" href="product#men.php">MENS</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="product#accesories.php">ACCESORIES</a>
              </div>
            </li>
            <li class="nav-item pr-3 ">
              <a class="nav-link text-dark " href="cart.php">CART</a>
            </li>
            <li class="nav-item pr-3 ">
              <a class="nav-link text-dark " href="blog.php">BLOG</a>
            </li>
            <li class="nav-item pr-3 ">
              <a class="nav-link text-dark " href="about.html">ABOUT</a>
            </li>
            <li class="nav-item pr-3 ">
              <a class="nav-link text-dark " href="contact.php">CONTACT</a>
            </li>
            <li class="nav-item dropdown pr-3 ">
              <a class="nav-link dropdown-toggle text-dark " hre f="#" role="button" data-toggle="dropdown" aria-expanded="false">SETTINGS</a>
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
    </header1>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h1>Blog</h1>


      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog1" class="blog">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">

          <div class="col-lg-8">

            <article class="blog-details">

              <div class="post-img">
                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                <video class="" height="400" width="730" src="resource\videos\vlog1.mp4" autoplay muted controls poster="resource\img\vlog1.png">
                  muted controls
                </video>
              </div>

              <h2 class="title">See how I Shop When I have no Time</h2>

              <div class="content">
                <p>
                DETAILS: DRESS VIA TRUNK CLUB | FUR COAT VIA TRUNK CLUB | NUDE PUMPS | BLACK CLUTCH | SUNGLASSES
                </p>

                <p>
                Holy cow, am I the only one who feels like the holidays get so crazy! With the hustle and bustle of the holidays a lot of times you forget to shop for yourself. It's usually the worst time for it too because you're rushing around planning for everyone else and there are so many parties and occasions to dress for. Cody has a huge family (I'm talking like 8 brothers and sisters! I love it!) so we usually have like 3-4 events during the season just with his family, from gift exchanges to Christmas traditions and adults- only family parties. I've been using Trunk Club for almost a year and it saves me in those hectic last minute situations – especially during the holidays - when you've been doing so much shopping for everyone else that you feel like you have nothing to wear. (Cody always teases me when I say that, but we all have that feeling when no matter what's in our closet nothing feels right!)
               </p>
                <h6>Leave a Comment:</h6>
                <form>

                  <div class="heart__icon center__display">
                      <i class="far fa-heart"></i>
                  </div>
                  <div class="form__info center__display">
                      <input type="text" name="user" id="user" placeholder="Your user name">
                      <input type="text" name="comment" id="comment" placeholder="Add a short comment here">
                  </div>
                  <button type="submit" class="submit__btn">
                      Submit
                  </button>
              </form>

          </div>
          <div class="comments__container center__display">

      </div>


            </article><!-- End blog post -->

            <div class="post-author d-flex align-items-center">
              <img src="assets/img/blog/blog-author.jpg" class="rounded-circle flex-shrink-0" alt="">
              <div>
                <h4 class="text-center">-0-</h4>
                <div class="social-links">
                  <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                  <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                  <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                </div>
                <p>
                  Sustainable fashion is expensive.” It’s a lie! Sustainable fashion isn’t expensive, it’s WORTH it. Sustainable fashion isn’t expensive, it’s valuable. Sustainable fashion isn’t expensive, it’s world-changing.
                </p>
              </div>
            </div><!-- End post author -->


          </div>
          <div class="col-lg-4">

            <div class="sidebar">


              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Recent Posts</h3>

                <div class="mt-3">

                  <div class="post-item mt-3">
                    <img src="resource\img\vlog1.png" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="#blog1">See how I Shop When I have no Time</a></h4>
                      <time datetime="2020-01-01">Feb 1, 2023</time>
                    </div>
                  </div><!-- End recent post item-->

                  <div class="post-item">
                    <img src="resource\img\blog2.png" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="#blog2">Surround Youself with Creatvity</a></h4>
                      <time datetime="2020-01-01">Jan 24, 2023</time>
                    </div>
                  </div><!-- End recent post item-->

                  <div class="post-item">
                    <img src="resource\img\blog3.jpg" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="#blog3">Webazaar's New Arrival shirts</a></h4>
                      <time datetime="2020-01-01">Jan 1, 2023</time>
                    </div>
                  </div><!-- End recent post item-->

                  <div class="post-item">
                    <img src="resource\img\blog8.png" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="#blog4">Want some Change?</a></h4>
                      <time datetime="2020-01-01">Dec 1, 2022</time>
                    </div>
                  </div><!-- End recent post item-->

                  <div class="post-item">
                    <img src="resource\img\blog4.jpg" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="#blog5">CODE41 Have Made A Tourbillon Watch You Can Wear Every Day</a></h4>
                      <time datetime="2020-01-01">sep 4, 2022</time>
                    </div>
                  </div><!-- End recent post item-->

                </div>

              </div><!-- End sidebar recent posts-->




          </div>
        </div>

      </div>

      </div>
    </section><!-- End Blog Details Section -->
    <br>
    <section id="blog2" class="blog">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">

          <div class="col-lg-8">

            <article class="blog-details">

              <div class="post-img">
                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                <video class="" height="400" width="730" src="resource\videos\vlog2.mp4" autoplay muted controls poster="">
                  muted controls
                </video>
              </div>

              <h2 class="title">Surround Youself with Creatvity</h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">Webazzar</a></li>

                </ul>
              </div><!-- End meta top -->

              <div class="content">
                <p>
                Creativity Month!!!!
                </p>

                <p >
                  You can submit your entry. Send your link below </p>
                <h6>Leave a Comment:</h6>
                <form>

                  <div class="heart__icon center__display">
                      <i class="far fa-heart"></i>
                  </div>
                  <div class="form__info center__display">
                      <input type="text" name="user" id="user" placeholder="Your user name">
                      <input type="text" name="comment" id="comment" placeholder="Add a short comment here">
                  </div>
                  <button type="submit" class="submit__btn">
                      Submit
                  </button>
              </form>

          </div>
          <div class="comments__container center__display">

      </div>


            </article><!-- End blog post -->


          </div>
          <div class="col-lg-4">



      </div>

      </div>
    </section><!-- End Blog Details Section -->
    br
    <section id="blog3" class="blog">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">

          <div class="col-lg-8">

            <article class="blog-details">

              <div class="post-img">
                <img src="resource\img\blog3.jpg" alt="" class="img-fluid">


                </video>
              </div>

              <h2 class="title">Webazaar's New Arrival shirts</h2>



              <div class="content">
                <p>
                The Brands Making The Coolest V-Neck T-shirts For Summer 2023
                </p>

                <p>
                  Few garments in menswear are as universally derided as the poor V-neck T-shirt. Such a simple, seemingly inoffensive piece of clothing, yet it attracts such negative reactions. People will tell you that they hate them; that they wouldn’t be seen dead in one. But could all of that be about to change? Could we be on the verge of the most unexpected sartorial comeback since flared jeans, fleece jackets or cargo pants? There have been some unmistakable signs that V-neck tees may be on the rise. They’ve been showing up on the fringes of fashion for a while now, sneaking into the occasional runway show and infiltrating the odd Gen-Z fashion TikTok video. If experience has taught us anything, it’s that signs like these often point to a more widespread trend on the horizon. So, in anticipation of the V-neck T-shirt making a mainstream comeback, we thought we’d revisit it for your benefit.  We’re sick of hearing all the reasons not to wear a V-neck tee, so here are some cases for it. Keep reading to find out more about one of menswear’s most misunderstood pieces, including how to wear it and where to buy one.<h6>Leave a Comment:</h6>
                <form>

                  <div class="heart__icon center__display">
                      <i class="far fa-heart"></i>
                  </div>
                  <div class="form__info center__display">
                      <input type="text" name="user" id="user" placeholder="Your user name">
                      <input type="text" name="comment" id="comment" placeholder="Add a short comment here">
                  </div>
                  <button type="submit" class="submit__btn">
                      Submit
                  </button>
              </form>

          </div>
          <div class="comments__container center__display">

      </div>


            </article><!-- End blog post -->



          </div>
          <div class="col-lg-4">



      </div>

      </div>
    </section><!-- End Blog Details Section -->
    <br>
    </section><!-- End Blog Details Section -->
    <section id="blog4" class="blog">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">

          <div class="col-lg-8">

            <article class="blog-details">

              <div class="post-img">
                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                <video class="" height="400" width="730" src="resource\videos\vlog3.mp4" autoplay muted controls poster="">
                  muted controls
                </video>
              </div>

              <h2 class="title">Want some Change?</h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">Quaintrelle_sjsks</a></li>

                </ul>
              </div><!-- End meta top -->

              <div class="content">
                <p>
                  Want to change the world with me but don’t know where to start? Your wardrobe has the power to make the world a better place - start there!
                  <br>
                  1️⃣ Research sustainable fashion, understand what it is and what it’s not. @weba blog is super helpful.
                  <br>
                  2️⃣ Stop impulse buying and over-shopping. Look at your wardrobe, work out what you do and don’t need, and commit to sustainable shopping.
                  <br>
                  3️⃣ If you’re ready to make the switch from being a fast fashion consumer to a slow fashion sustainable shopper, start at webazzar.com. I stock some AMAZING Clothes and Accessories who share my sustainability values.
                  <br>
                  Most importantly, have fun with sustainable fashion! It’s fashion - it’s meant to be fun!
                  <br>
                  #thefashionadvocate #sustainability #sustainablestyle #slowfashion #slowfashionstyle #madeinaustralia #australianmade #sustainableliving #ecofashion #styleblogger #styleinspiration #madeinbrisbane #fashion #whomademyclothes
                </p>

                <p >

                </p>
                <h6>Leave a Comment:</h6>
                <form>

                  <div class="heart__icon center__display">
                      <i class="far fa-heart"></i>
                  </div>
                  <div class="form__info center__display">
                      <input type="text" name="user" id="user" placeholder="Your user name">
                      <input type="text" name="comment" id="comment" placeholder="Add a short comment here">
                  </div>
                  <button type="submit" class="submit__btn">
                      Submit
                  </button>
              </form>

          </div>
          <div class="comments__container center__display">

      </div>


            </article><!-- End blog post -->

            <div class="post-author d-flex align-items-center">
              <img src="assets/img/blog/blog-author.jpg" class="rounded-circle flex-shrink-0" alt="">
              <div>
                <h4 class="text-center">-0-</h4>
                <div class="social-links">
                  <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                  <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                  <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                </div>
                <p>
                  Buying fashion shouldn’t be about HOW MUCH you pay for it - it should be about how much you love it, how much of a positive environmental impact it has, and how much the person who made it gets paid.

                </p>
              </div>
            </div><!-- End post author -->


          </div>
          <div class="col-lg-4">



      </div>

      </div>
    </section><!-- End Blog Details Section -->
    <br>
    <section id="blog5" class="blog">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">

          <div class="col-lg-8">

            <article class="blog-details">

              <div class="post-img">
                <img src="resource\img\blog4.jpg" alt="" class="img-fluid">

                </video>
              </div>

              <h2 class="title">CODE41 Have Made A Tourbillon Watch You Can Wear Every Day</h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">Dior</a></li>

                </ul>
              </div><!-- End meta top -->

              <div class="content">
                <p>
              An Incredible Piece Of Haute Horlogerie
                </p>

                <p >
                  Technically speaking, no modern watch needs a tourbillon. Conceived by British watchmaker John Arnold and brought to life by Swiss legend Abraham-Louis Breguet at the beginning of the 19th century, it was designed to prevent the effects of gravity that came to bear on a pocket watch’s escapement from being sedentary.

                  Being stuck in a pocket all day affected the balance, which led to timekeeping errors. Wrist watches live much more active lives now, making a tourbillon redundant. However, that doesn’t stop people wanting them.

                  Rather than being practical, they are now signifiers of a brand’s mechanical prowess, and their elevated price tags just add to the aura. After all, we always want what we can’t have.
                 </p>

                <h6>Leave a Comment:</h6>
                <form>

                  <div class="heart__icon center__display">
                      <i class="far fa-heart"></i>
                  </div>
                  <div class="form__info center__display">
                      <input type="text" name="user" id="user" placeholder="Your user name">
                      <input type="text" name="comment" id="comment" placeholder="Add a short comment here">
                  </div>
                  <button type="submit" class="submit__btn">
                      Submit
                  </button>
              </form>

          </div>
          <div class="comments__container center__display">

      </div>


            </article><!-- End blog post -->



      </div>

      </div>
    </section><!-- End Blog Details Section -->
    <br>
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">

          <div class="col-lg-8">

            <article class="blog-details">

              <div class="post-img">

                <video class="" height="400" width="730" src="resource\videos\vlog5.mp4" autoplay muted controls poster="">
                  muted controls
                </video>
              </div>

              <h2 class="title">Charlie middletonsyd bag</h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">RNC</a></li>

                </ul>
              </div><!-- End meta top -->

              <div class="content">
                <p>
                  charliemiddletonsyd– Unique piece ©webazzar
                </p>

                <p >
                  @charliemiddletonsyd are the epitome of quality leather handbags. Yes, I’m camp ‘leather is sustainable’ because if you look after it, it lasts hundreds of years. I also believe leather is sustainable when it’s been sourced ethically and @charliemiddletonsyd ticks that box too.
                  <br>
                  Every bag is ethically hand crafted in Sydney by a small team of passionate makers, and they feel BUTTERY soft.
                  <br>
                  Head to @charliemiddletonsyd and shop small to have a big impact.
                  <br>
                  #thefashionadvocate #charliemiddleton #leatherbag #sustainabletips #ecotips #reducereuserecycle #madeinsydney #australianmade #ecoblogger #reuse #sustainableliving #plasticfreeliving #reusable #madeinaustralia #sydneymade #baglady #sustainablelifestyle #positiveimpact #ecoactivist #reusablebag #backpack #handmadeau #handmadeaustralia
                   </p>

                <form>

                  <div class="heart__icon center__display">
                      <i class="far fa-heart"></i>
                  </div>
                  <div class="form__info center__display">
                      <input type="text" name="user" id="user" placeholder="Your user name">
                      <input type="text" name="comment" id="comment" placeholder="Add a short comment here">
                  </div>
                  <button type="submit" class="submit__btn">
                      Submit
                  </button>
              </form>

          </div>
          <div class="comments__container center__display">

      </div>


            </article><!-- End blog post -->
          </div>
          <div class="col-lg-4">
           </div>

      </div>
    </section><!-- End Blog Details Section -->
    <br>
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">

          <div class="col-lg-8">

            <article class="blog-details">

              <div class="post-img">
                <img src="resource\img\blog6.jpeg   " alt="" class="img-fluid">
              </div>

              <h2 class="title">How to stand out with your belt?</h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">AKIRA</a></li>

                </ul>
              </div><!-- End meta top -->

              <div class="content">
                <p>
                Madonna Design belt – Unique piece ©webazzar
                </p>

                <p >
                  A belt is an accessory that enhances your style. Take a coat that is flexible or less flexible but straight, and your belt, worn over your clothing, will do the rest. Because it makes it possible to highlight the volumes and the cut.
                  <br>
                  Even more stylish: sport your belt over a cape and do so just above waist level. In this case, elegance is the order of the day. </p>

                <form>

                  <div class="heart__icon center__display">
                      <i class="far fa-heart"></i>
                  </div>
                  <div class="form__info center__display">
                      <input type="text" name="user" id="user" placeholder="Your user name">
                      <input type="text" name="comment" id="comment" placeholder="Add a short comment here">
                  </div>
                  <button type="submit" class="submit__btn">
                      Submit
                  </button>
              </form>

          </div>
          <div class="comments__container center__display">

      </div>


            </article><!-- End blog post -->

            <div class="post-author d-flex align-items-center">
              <img src="assets/img/blog/blog-author.jpg" class="rounded-circle flex-shrink-0" alt="">
              <div>
                <h4 class="text-center">-0-</h4>
                <div class="social-links">
                  <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                  <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                  <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                </div>
                <p>

                  It is the most challenging yet most rewarding journey I’ve ever been on, and it’s only just beginning.

                </p>
              </div>
            </div><!-- End post author -->


          </div>
          <div class="col-lg-4">



      </div>

      </div>
    </section><!-- End Blog Details Section -->

  </main><!-- End #main -->
  <hr>
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
              <li class="pb-3">FEATURES</li>
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

    <script src="vendor/animsition/js/animsition.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

  <script>
    const section = document.querySelector("section"),
    mainVideo = document.querySelector(".main-video video"),
     videos = document.querySelectorAll(".videos"),
     close = document.querySelector(".close");

     for (var i = 0; i < videos.length; i++) {
       videos[i].addEventListener("click", (e)=>{
         const target = e.target;
         section.classList.add("active");
         target.classList.add("active");
         let src = document.querySelector(".videos.active video").src;
         mainVideo.src = src;

         close.addEventListener("click", ()=>{
           section.classList.remove("active");
           target.classList.remove("active");
           mainVideo.src = "";
         });
       });
     };


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>


<script src="//code.jquery.com/jquery.min.js"></script>
<script src="jquery-shorten.js"></script>


  <!-- Template Main JS File -->
  <script src="resource\js\blog.js"></script>



</body>

</html>
