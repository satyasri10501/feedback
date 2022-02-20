<?php 
session_start();
 require('dbconfig.php');

extract($_POST);
if(isset($save))
{
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where email='$e'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'><h3 align='center'>This user already exists</h3></font>";
}
else
{
//dob
$dob=$yy."-".$mm."-".$dd;



//encrypt your password
$pass=md5($p);


$query="insert into user values('','$sid','$n','$e','$pass','$mob','$pro','$sem','$gen','$dob',now())";
mysqli_query($conn,$query);


$err="<font color='blue'><h3 align='center'>Registration successfull !!<h3></font>";

}
}


?>
<html>
		<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		</head>
		<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		
		 <body>
		<form method="post" id="form" enctype="multipart/form-data"  onsubmit="return validation()">
		<table class="table table-bordered" style="margin-bottom:50px"	 align="center">
			<caption><h2 align="center">Registration Form</h2></caption>
				<Tr>
				<Td colspan="2"><?php echo @$err;?></Td>
			</Tr>
				
				<tr>
					<td>Enter Your regd num</td>
					<Td><input  type="text" name="sid"  placeholder="19B01A0***" class="form-control" required/></td>
				</tr>
				
				<tr>
					<td>Enter Your name</td>
					<Td><input  type="text" name="n" class="form-control" required/></td>
				</tr>
				<tr>
					<td>Enter Your email </td>
					<Td><input type="text" name="e" id="e" placeholder="Enter college mail Address" class="form-control" required/>
					<span id="text" style="color: red;"></span>
					</td>
				</tr>
				
				<tr>
					<td>Enter Your Password </td>
					<Td><input type="password" name="p" class="form-control" required/></td>
				</tr>
				
				<tr>
					<td>Enter Your Mobile </td>
					<Td><input type="text" name="mob" class="form-control" required/></td>
				</tr>
				
				<tr>
					<td>Select Your Programme</td>
					<Td><select name="pro" class="form-control" required>
					
					<option>CSE</option>
					<option>ECE</option>
					<option>EEE</option>
					<option>MECH</option>
					</select>
					</td>
				</tr>
				
				<tr>
					<td>Select Your Semester</td>
					<Td><select name="sem" class="form-control" required>
					
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					</select>
					</td>
				</tr>
				
				<tr>
					<td>Select Your Gender</td>
					<Td>
				Male<input type="radio" name="gen" value="m"/>
				Female<input type="radio" name="gen" value="f"/>	
					</td>
				</tr>
				
				<tr>
					<td>Enter Your DOB</td>
					<Td>
					<select style="width:100px;float:left" name="yy" class="form-control" required>
					<option value="">Year</option>
					<?php 
					for($i=1990;$i<=2009  ;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					<select style="width:100px;float:left" name="mm" class="form-control" required>
					<option value="">Month</option>
					<?php 
					for($i=1;$i<=12;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
 					
					<select style="width:100px;float:left" name="dd" class="form-control" required>
					<option value="">Date</option>
					<?php 
					for($i=1;$i<=31;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					</td>
				</tr>
				
				<tr>
					
					
<Td colspan="2" align="center">
<input type="submit" id= "submit" value="save" class="btn btn-info" name="save"/>
<input type="reset" value="Reset" class="btn btn-info"/><br><br>
<a href="index.php" >go back to home screen</a>				
					</td>
				</tr>
			</table>
</form>
		</div>
		<div class="col-sm-2"></div>
		</div>

<script type="text/javascript">
  
        $(document).ready(function() {  
            $("#submit").click(function() {  
                var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@(svecw.edu.in)$/;  
                var receivedEmail = document.getElementById("e").value.trim();  
                if (!(receivedEmail.toLowerCase().match(validRegex))) {  
                    document.getElementById("text").innerHTML= "Enter Valid email address";
                    alert("Wrong Email Address");
                   // return;  
                } 
            });  
        });
</script>
	</body>
</html>