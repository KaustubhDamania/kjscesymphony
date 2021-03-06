<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="format-detection" content="telephone=no" />
    <title>Symphony 2019</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="assets/css/demo.css" />
    <link rel="stylesheet" href="assets/css/pater.css">
    <link rel="stylesheet" href="assets/css/newhome.css" />
    <link rel="stylesheet" href="assets/css/sitemap.css" />
    <link rel="stylesheet" href="assets/css/index.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132742730-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-132742730-1');
    </script>
  </head>
  <body class="demo-6">
    <!-- preload images -->
    <div style="display: none;">
      <img src="assets/images/2019/homepage/aboutus.png" alt="" />
      <img src="assets/images/2019/homepage/events.png" alt="" />
      <img src="assets/images/2019/homepage/parvaah.png" alt="" />
      <img src="assets/images/2019/homepage/proshows.png" alt="" />
      <img src="assets/images/2019/homepage/reachus.png" alt="" />
      <img src="assets/images/2019/homepage/rules.png" alt="" />
      <img src="assets/images/2019/homepage/shield.png" alt="" />
      <img src="assets/images/2019/homepage/sponsors.png" alt="" />
      <img src="assets/images/2019/homepage/syahi.png" alt="" />
      <img src="assets/images/2019/homepage/theme.png" alt="" />
    </div>
    <!-- DISPLAYED CONTENT STARTS HERE -->
    <main class="main--demo6">
      <div class="content--demo-6">
        <div class="header-wrapper">
          <!-- HAMBURGER ICON -->
          <div class="hamburger hamburger--demo-6 js-hover">
            <div class="hamburger__line hamburger__line--01">
              <div class="hamburger__line-in hamburger__line-in--01 hamburger__line-in--demo-5"></div>
            </div>
            <div class="hamburger__line hamburger__line--02">
              <div class="hamburger__line-in hamburger__line-in--02 hamburger__line-in--demo-5"></div>
            </div>
            <div class="hamburger__line hamburger__line--03">
              <div class="hamburger__line-in hamburger__line-in--03 hamburger__line-in--demo-5"></div>
            </div>
            <div class="hamburger__line hamburger__line--cross01">
              <div class="hamburger__line-in hamburger__line-in--cross01 hamburger__line-in--demo-5"></div>
            </div>
            <div class="hamburger__line hamburger__line--cross02">
              <div class="hamburger__line-in hamburger__line-in--cross02 hamburger__line-in--demo-5"></div>
            </div>
          </div>
        </div>
        <!-- MAIN CONTENT GOES HERE -->
        <!-- TOP LEFT IMAGE GOES HERE, height 100px -> 50px -->
        <div class="header" class="animated slideInDown">
          <a href="index.php"> <img id="home-logo" class="animated slideInDown" src="assets/images/2019/Updated symphony logo withtheme.svg" alt="" /></a>
        </div>
        <!-- HEAD -->
        <!-- MAIN CONTENT HEIGHT - 100vh - 200px for DESK, 100vh - 100px for Mobile-->
        <div class="homepage" id="main-content">
          <div class="homepage__menu">
            <div class="homepage__titles">
              <div class="homepage__title aboutus">
                <a class="homepage__titles_white" href="./about-us.php">About Us <br /></a>
              </div>
              <div class="homepage__title theme">
                <a class="homepage__titles_white" href="./theme.php">Theme <br></a>
              </div>
              <div class="homepage__title events">
                <a class="homepage__titles_white" href="./events.php">Events <br /></a>
              </div>
              <div class="homepage__title proshows">
                <a class="homepage__titles_white" href="javascript:;">Pro-Shows <br /></a>
              </div>
              <div class="homepage__title shield">
                <a class="homepage__titles_white"  href="./shield.php">Shield <br /></a>
              </div>
              <div class="homepage__title syahi">
                <a class="homepage__titles_white" href="javascript:;">Syahi <br /></a>
              </div>
              <div class="homepage__title rules">
                <a class="homepage__titles_white" href="./rules.php">Rules <br /></a>
              </div>
              <div class="homepage__title parvaah">
                <a class="homepage__titles_white" href="./parvaah.php">Parvaah <br /></a>
              </div>
              <div class="homepage__title sponsors">
                <a class="homepage__titles_white" href="./sponsors.php">Sponsors <br /></a>
              </div>
              <div class="homepage__title reachus">
                <a class="homepage__titles_white" href="./reachus.php">Reach Us <br /></a>
              </div>
            </div>
          </div>
          <div class="homepage__img animated slideInRight">
            <div class="homepage__imgContainer">
              <img class="homepage__imgChange" src="assets/images/2019/Updated symphony logo withtheme.svg" alt="Symphony Logo" />
            </div>
          </div>
        </div>
        <?php
        require_once('includes/sitemap.php');
        ?>
      </div>
    </main>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/easings.js"></script>
    <script src="assets/js/demo.js"></script>
    <script src="assets/js/demo6.js"></script>
    <script src="assets/js/homepage.js"></script>
  </body>
</html>