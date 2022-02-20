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
		.row_main
		{
			position: relative;
			width: 450px;
			min-height: 300px;
			background: rgba(255, 255, 255, 0.05);
			box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
		}
		.row_main:before
		{
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			width: 50%;
			height: 100%;
			background: rgba(255, 255, 255, 0.1);
			pointer-events: none;
		}
		form 
		{
			position: absolute;
			width: 100%;
			height: 100%;
			padding-top: 20px;
			padding-left: 40px;
			padding-right: 20px;
			box-sizing: border-box;
			z-index: 1;
		}
		form h2
		{
			margin: 0;
			padding: 0;
			color: #fff;
			font-size: 26px;
			padding-left: 0px;
			
		}
		form .form-control
		{
			width: 100%;
			margin-top: 20px;
			background: none;
			outline: none;
			border: none;
			border-bottom: 2px solid #fff;
			padding: 15px;
			padding-left: 0;
			font-size: 20px;
            autofill: none;
		}
		form .form-control input
		{
			width: 100%;
			background: transparent;
			border: none;
			border-bottom: 2px solid #fff;
			outline: none;
			font-size: 18px;
			color: #fff;
			padding: 5px 0;
            autofill: none;
		}
		
		form .col-sm-4 input[type="submit"]
		{
			background: #fff;
			color: #000;
			border: none;
			font-weight: 900;
			max-width: 100px;
			cursor: pointer;
		}
	
		</style>
 </head>
<body>

    <div class="container">
<img src="css/vlogo.jpg" height="100">
        <div class="navbar">
<h3 class="logo" align="center">SHRI Vishnu engineering college for women<span></span></h3>
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
						<?php 
extract($_POST);
if(isset($save))
{

	if($e=="" || $p=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{

$sql=mysqli_query($conn,"select * from faculty where email='$e' and password='$p'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$_SESSION['faculty_login']=$e;
header('location:faculty');
}

else
{

$err="<font color='red'>Invalid login details</font>";

}
}
}

?>
<div class="row_main">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">

<form method="post">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><h2>FACULTY LOGIN FORM</h2></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-5">
		<input type="email" name="e" class="form-control" placeholder="FACULTY EMAIL" /></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-5">
		<input type="password" name="p" class="form-control" placeholder="PASSWORD" /></div>
	</div>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4"></div>
		<div class="col-sm-8">
		<input type="submit" value="Login" name="save" class="btn btn-info"/>
		
		</div>
	</div>
</form>	
</div>
</div>
                            
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