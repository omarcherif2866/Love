<?php
require 'php/config.php';
    if (isset($_POST["submit"])) {
        $email = $_POST["email"];
        $password = $_POST["Password"];
        $result = mysqli_query($conn , "SELECT * FROM user WHERE email = '$email'");
        $row = mysqli_fetch_assoc($result);
        if(mysqli_num_rows($result) > 0){
            if($password == $row["password"]){
              $_SESSION["login"] = true;
              $_SESSION["id"] = $row["id"];
              echo "<script> alert ('login validé ')</script>";  
              header("Location: index-default.html");
          
        }else {
            echo "<script> alert ('wrong password')</script>";

        }
      }else {
          echo "<script> alert (' user not registred ') </script>"; 
      }
    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="Cabinet Manzoul" />
  <meta name="description" content="Cabinet Manzoul" />
  <meta name="author" content="oussema jebali" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cabinet Manzoul</title>
  
  <link rel="shortcut icon" href="images/favicon.png" />

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<link href="css/mega-menu/mega_menu.css" rel="stylesheet" type="text/css" />

<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

<link href="css/flaticon.css" rel="stylesheet" type="text/css" />

<link href="css/general.css" rel="stylesheet" type="text/css" />

<link href="css/style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="css/skins/skin-default.css" data-style="styles" />
<link rel="stylesheet" type="text/css" href="css/style-customizer.css" />
</head>

<body>

<div id="preloader">
  <div class="clear-loading loading-effect"><img src="images/loading.gif" alt="" /></div>
</div>

 <header id="header" class="dark">
  <div class="topbar">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="topbar-left text-start">
            <ul class="list-inline">
              <li><a href="mailto:contact@cabinetmanzoul.fr"><i class="fa fa-envelope-o"> </i>contact@cabinetmanzoul.fr</a></li>
              <li><a href="tel:+2550748624702"><i class="fa fa-phone"></i>+225 07 48 62 47 02 / +33 6 29 79 27 59</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="topbar-right text-end">
            <ul class="list-inline social-icons color-hover">
              <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li class="social-instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
            <ul class="list-inline text-uppercase top-menu">
              <li><a href="register.php">Inscription</a></li>
              <li class="active"><a href="login.php">Authentification</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="menu">
    <nav id="menu" class="mega-menu">
      <section class="menu-list-items">
        <div class="container">
          <div class="row position-relative">
            <div class="col-md-12 position-relative">
              <ul class="menu-logo">
                <li> <a href="index-default.html"><img src="images/logo.png" alt="logo" /> </a> </li>
              </ul>
              <ul class="menu-links">
                <li ><a href="index-default.html"> Accueil</a>

                </li>
                <li><a href="index-default.html.#propos">A propos </a>
                
                </li>
                <li><a href="index-default.html.#service">Nos services </a>
                  
                </li>
                <li><a href="test.html"> Test </a></li>
                 
                </li>
                <li><a href="annonce.html"> Nos annonces </a>
                
                </li>
              
                <li><a href="conseil.html"> Nos conseils </a>
                
                </li>
                <li><a href="contact-1.html"> Contact </a>
              
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </nav>
  </div>
</header>

<section class="inner-intro bg bg-fixed bg-overlay-black-60" style="background-image:url(images/bg/inner-bg-1.jpg);">
  <div class="container">
    <div class="row intro-title text-center">
      <div class="col-md-12">
        <div class="section-title">
          <h1 class="position-relative divider">Authentification <span class="sub-title">Authentification</span></h1>
        </div>
      </div>
      <div class="col-md-12 mt-7">
        <ul class="page-breadcrumb">
          <li><a href="index-default.html"><i class="fa fa-home"></i> Accueil</a> <i class="fa fa-angle-double-right"></i></li>
          <li><a href="login.php">Authentification</a> 
        </ul>
      </div>
    </div>
  </div>
</section>

 <section class="login-form login-img dark-bg page-section-ptb " style="background: url(images/pattern/04.png) no-repeat 0 0; background-size: cover;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
      <form action="" method="post" >
        <div class="login-1-form clearfix text-center">
          <h4 class="title divider-3 text-white">S'authentifier</h4>
          <div class="login-1-social my-4 my-md-5 text-center clearfix">
            <ul class="list-inline text-capitalize">
              <li><a class="fb" href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
              <li><a class="gplus" href="#"><i class="fa fa-google-plus"></i> Google+</a></li>
            </ul>
          </div>
          <div class="section-field mb-3">
            <div class="field-widget"> <i class="glyph-icon flaticon-user"></i>
              <input id="name" class="web" type="text" placeholder="Email " name="email">
            </div>
          </div>
          <div class="section-field mb-3">
            <div class="field-widget"> <i class="glyph-icon flaticon-padlock"></i>
              <input id="Password" class="Password" type="password" placeholder="Mot de passe" name="Password">
            </div>
          </div>
          <div class="section-field text-uppercase"> <a href="#" class="float-end text-white">Mot de passe oublié?</a> </div>
          <div class="clearfix"></div>
          <div class="section-field text-uppercase text-center mt-2">
                  <button class="button btn-lg btn-theme full-rounded animated right-icn" type="submit" name="submit">
                    <span>Se Connecter<i class="glyph-icon flaticon-hearts" aria-hidden="true"></i></span>
                  </button>
              </div>
          <div class="clearfix"></div>
          <div class="section-field mt-2 text-center text-white">
            <p class="lead mb-0">Vous n'avez pas de compte? <a class="text-white" href="register.php"><u>Inscrivez-vous maintenant!</u> </a></p>
          </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</section>

<footer class="text-white text-center">
  <div class="footer-widget">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="footer-logo mb-2"> <img class="img-center" src="images/footer-logo.png" alt="" /> </div>
          <div class="social-icons color-hover">
            <ul>
              <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li class="social-twitter"><a href="#"><i class="fa fa-instagram"></i></a></li>
              
              <li class="social-youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
            </ul>
          </div>
          <p class="text-white">© 2024  - <a href="https://www.ozisscorporation.com" target="_blank">OZISS COOPERATION</a>  All Right Reserved  </p>
        </div>
      </div>
    </div>
  </div>
</footer>

<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-level-up"></i></a></div>


<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>

<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script type="text/javascript" src="js/jquery.appear.js"></script>

<script type="text/javascript" src="js/jquery.appear.js"></script>

<script type="text/javascript" src="js/mega-menu/mega_menu.js"></script>

<script type="text/javascript" src="js/style-customizer.js"></script>

<script type="text/javascript" src="js/custom.js"></script>
</body>

</html>
