<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/webazaar/resource/php/class/core/init.php';
if(isset($_POST['submit'])){

  $name = mysqli_real_escape_string($conn, $_POST['username']);
  $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

  $select = mysqli_query($conn, "SELECT * FROM `tbl_accounts` WHERE name = '$name' AND password = '$pass'") or die('query failed');

  if(mysqli_num_rows($select) > 0){
     $row = mysqli_fetch_assoc($select);
     $_SESSION['user_id'] = $row['id'];
     header('location:index.php');
  }else{
     $message[] = 'incorrect password or email!';
  }

}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log-in | Webazaar</title>
  <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
  <link href="vendor/css/all.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="resource/img/logo.png">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="resource/css/login.css">
  <link rel="icon" type="image/x-icon" href="resource/img/logo.png">
  </head>
  <body>
    <div class="container mt-5 pt-5">
        <div class="row">
          <div class="col-md-5 mb-5 log-bg">
            <img src="resource/img/loginlogoweb.png" class="log-logo" alt="">
            <p class="text-center text-light">No account? <a class="text-primary"href="register.php">Sign up here</a></p>
          </div>
          <div class="col-md-7 pt-5">
            <form class="form" method="post">
                <p class="text-dark"id="heading">Login</p>
                  <?php logd();?>
                <div class="field">
                  <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z"></path>
                  </svg>
                  <input type="text" name="username" id="username" autocomplete="off" placeholder="Username" class="input-field text-dark" required>
                </div>
                <div class="field">
                  <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"></path>
                  </svg>
                  <input  type="password" id="defaultLoginFormPassword" name ="password" placeholder="Password" class="input-field text-dark" required>
                </div>
                <div class="btn mb-5 pb-5">
                  <input type =hidden name="token" value="<?php echo Token::generate(); ?>">
                  <button type="submit" name="submit" class="set">LOG-IN</button>
                </div>
            </form>
          </div>
        </div>
      <div class="wave">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
        </svg>
    </div>
    </div>

    <script src="vendor/js/jquery.js"></script>
    <script src="vendor/js/popper.js"></script>
    <script src="vendor/js/bootstrap.min.js"></script>
</body>
</html>