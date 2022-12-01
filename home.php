<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/media.css">
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">

  <!-- Title -->
  <title>Easybank | Home page</title>
</head>

<body>
  <script>
    alert('Successfully Log-in!')
  </script>
  <div class="main">
    <div class="container">
      <!-- Navbar  -->
      <div class="navbar">

        <!-- Logo` -->
        <div class="logo1">
          <img src="./images/logo.svg" alt="">
        </div>

        <div class="nav-links">

          <!-- Logo -->
          <div class="logo">
            <img src="./images/logo.svg" alt="">
          </div>

          <!-- Links -->
          <div class="navbar-middle">
            <li><a href="./index.html">Home</a></li>
            <li><a href="./index.html#C1">About</a></li>
            <li><a href="./index.html#C2">Blog</a></li>
            <li><a href="./index.html#C3">Contact</a></li>
            <li><a href="#">Careers</a></li>
          </div>

          <div class="navbar-right">
            <a href="./index.php">Log out</a>
          </div>

        </div>
        <img src="./images/icon-menu.svg" alt="image" class="menu-btn">
      </div>



      <!-- Body -->
      <div class="body">
        <div class="header-content1">
        </div>
      </div>

      <header class="text">
        <div id="C0"></div>
        <div class="header-content">
          <h2>Next generation digital banking</h2>
          <p>Take your financial life online. Your Easybank account will be a one-stop-shop
            for spending, saving, budgeting, investing, and much more.</p>
          <a href="#">Invite</a>
        </div>
      </header>


      <!-- Section Stuff -->
      <section class="stuff">

        <div class="title">
          <div id="C1"></div>
          <h3> Why choose Easybank? </h3>
          <p>We leverage Open Banking to turn your bank account into your financial hub. Control
            your finances like never before. </p>
        </div>

        <div class="row">

          <div class="col">
            <img src="./images/icon-online.svg" alt="">
            <h4>Online Banking</h4>
            <p>Our modern web and mobile applications allow you to keep track of your finances
              wherever you are in the world.</p>
          </div>

          <div class="col">
            <img src="./images/icon-budgeting.svg" alt="">
            <h4>Simple Budgeting </h4>
            <p>See exactly where your money goes each month. Receive notifications when you’re
              close to hitting your limits.</p>
          </div>

          <div class="col">
            <img src="./images/icon-onboarding.svg" alt="#">
            <h4> Fast Onboarding </h4>
            <p>We don’t do branches. Open your account in minutes online and start taking control
              of your finances right away.</p>
          </div>

          <div class="col">
            <img src="./images/icon-api.svg" alt="">
            <h4>Open API</h4>
            <p>Manage your savings, investments, pension, and much more from one account. Tracking
              your money has never been easier.</p>
          </div>
        </div>
      </section>

      <!-- Section  explore-->
      <section class="explore">
        <div id="C2"></div>

        <div class="title">
          <h3> Latest Article</h3>
        </div>


        <div class="rol">

          <div class="col">
            <img src="./images/image-currency.jpg" alt="">
            <h5>By Claire Robinson</h5>
            <h3><a href="">Receive money in any currency with no fees</a></h3>
            <p>The world is getting smaller and we’re becoming more mobile. So why should you be
              forced to only receive money in a single …</p>
          </div>

          <div class="col">
            <img src="./images/image-restaurant.jpg" alt="">
            <h5>By Wilson Hutton</h5>
            <h3><a href="#">Treat yourself without worrying about money</a></h3>
            <p>Our simple budgeting feature allows you to separate out your spending and set
              realistic limits each month. That means you …</p>

          </div>

          <div class="col">
            <img src=".//images/image-plane.jpg" alt="#">
            <h5>By Wilson Hutton</h5>
            <h3><a href="#">Take your Easybank card wherever you go</a></h3>
            <p>We want you to enjoy your travels. This is why we don’t charge any fees on purchases
              while you’re abroad. We’ll even show you …</p>
          </div>

          <div class="col">
            <img src="./images/image-confetti.jpg" alt="">
            <h5>By Claire Robinson</h5>
            <h3><a href="#">Our invite-only Beta accounts are now live!</a></h3>
            <p>After a lot of hard work by the whole team, we’re excited to launch our closed beta.
              It’s easy to request an invite through the site ...</p>
          </div>
        </div>
      </section>

      <!-- Section filter-->
      <section class="filter">
        <div id="C3"></div>
        <div class="links">
          <a href=""><img src="./images/icon-facebook.svg" alt=""></a>
          <a href=""><img src="./images/icon-youtube.svg" alt=""></a>
          <a href=""><img src="./images/icon-twitter.svg" alt=""></a>
          <a href=""><img src="./images/icon-pinterest.svg" alt=""></a>
          <a href=""><img src="./images/icon-instagram.svg" alt=""></a>
        </div>

        <div class="l-links-l">
          <a href="#">About Us</a>
          <a href="#">Contact</a>
          <a href="#">Blog</a>
        </div>

        <div class="l-links-l">
          <a href="#">Careers</a>
          <a href="#">Support</a>
          <a href="#">Privacy Policy</a>
        </div>

        <div class="button">
          <div class="lik">
            <li><button>Request Invite</button></li>
            <li>© Easybank. All Rights Reserved</li>
          </div>
        </div>
      </section>

    </div>

    <!-- Javascript -->
    <script>
      const menuBtn = document.querySelector('.menu-btn')
      const navlinks = document.querySelector('.nav-links')

      menuBtn.addEventListener('click', () => {
        navlinks.classList.toggle('mobile-menu')
      })
    </script>

  </div>
</body>

</html>