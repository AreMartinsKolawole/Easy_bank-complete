<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style2.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/media2.css">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">

    <!-- Title -->
    <title>Easybank | Sign up page</title>
</head>

<body>

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



                    <div class="navbar-right">
                        <a href="./index.php">Sign In</a>
                    </div>

                </div>
                <img src="./images/icon-menu.svg" alt="image" class="menu-btn">
            </div>

            <div class="body">
                <div class="header-content1">
                </div>
            </div>

            <header class="text">
                <div class="header-content">



                    <form method="post" action="signup.php">
                        <h3> Sign in </h3>
                        <label for="email"><b>Email</b></label><br>
                        <input type="text" placeholder="Enter Email" name="email" required autofocus><br>

                        <label for="psw"><b>Password</b></label><br>
                        <input type="password" placeholder="Enter Password" name="psw" required><br>

                        <label for="psw"><b>Confirm-Password</b></label><br>
                        <input type="password" placeholder="Enter Password" name="psw-repeat" required><br>

                        <button type="submit" class="registerbtn">SIGN Up</button><br>
                </div>

                </form>

                </form>
        </div>
        </header>
</body>

</html>