<?php
session_start();
 require('dbconfig.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        header
        {
            min-height: 100vh;
            width: 100%;
            background: url("css/10.jpg") no-repeat top center / cover;
            position: relative;
        }
    </style>
 </head>
<body>

    <div class="container">
<img src="css/vlogo.jpg" height="100">
        <div class="navbar">
	 <h1 class="logo" align="center">SHRI Vishnu engineering college for women</h1>
	
            <div class="menu">
               
	 <br><br><h3 class="logo" align="center" ><b>Feedback management system</b></h2>
	
                <div class="hamburger-menu">
                <div class="bar"></div>
            </div>

            </div>
        </div>
        <div class="main-container">
            <div class="main">
                <header>
                    <div class="overlay">
                        <div class="inner">
                            <!-- <h2 class="title">future is here</h2>
                            <p>This is a website made by php and mysql</p>
                            <a href="#" class="btn">Visit Site</a> -->
                            
                        </div>
                    </div>
                </header>
            </div>
            <div class="shadow one"></div>
            <div class="shadow two"></div>
        </div>
        <div class="links">
            <ul>
                <li>
                    <a href="index.php" style="--i: 0.05s;">Home</a>
                </li>
                <li>
                    <a href="registration.php" style="--i: 0.1s;">Registration</a>
                </li>
                <li>
                    <a href="login.php" style="--i: 0.15s;">Student Login</a>
                </li>
                <li>
                    <a href="faculty_login.php" style="--i: 0.2s;">Faculty Login</a>
                </li>
                <li>
                    <a href="admin" style="--i: 0.25s;">Admin Login</a>
                </li>
            </ul>
        </div>
    </div>
    
    <!-- <script src="app.js"></script> -->
    <script>
        const hamburger_menu = document.querySelector(".hamburger-menu");
        const container = document.querySelector(".container");

        hamburger_menu.addEventListener("click", () => {
        container.classList.toggle("active");
})
    </script>
</body>
</html>