<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="signup.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<div class="topnav">
  <a href="index.php">Home</a>

  <a href="signup.php">SignUp</a>
  <a href="addproduct.php">AddBook</a>
  <a href="borrowbook.php">Borrow Book</a>
  <a href="return.php">Return Book</a>
</div>

<div class="row">
<h2 align='center'>Customer Registration Form</h2>
  <div class="container">
  <form action="signup.php" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-25">
      <label for="name">Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="name" placeholder="Your name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="email">Email</label>
    </div>
    <div class="col-75">
      <input type="text" id="email" name="email" placeholder="Your email..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="country">city</label>
    </div>
    <div class="col-75">
      <select id="country" name="loc">
        <option value="street1">street1</option>
        <option value="street1">street1</option>
        <option value="street1">street1</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="mobile">Mobile No.</label>
    </div>
    <div class="col-75">
      <input type="text" id="mobile" name="mobile" placeholder="Your mobile no..">
	  </div>
  </div>
 
  <div class="row">
    <div class="col-25">
      <label for="mobile">Age.</label>
    </div>
    <div class="col-75">
      <input type="digit" id="digit" name="digit" placeholder="Your age">
	  </div>
  </div>
 
  
  
  <div class="row">
    <div class="col-25">
      <label for="pass">Password</label>
    </div>
    <div class="col-75">
      <input type="password" id="pass" name="pass" placeholder="Your password..">
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit" name="submit">
  </div>
  </form>
</div>
</div>

<div class="footer">
  <h2>Copyright@puc.cse</h2>
  
</div>

</body>
</html>

<?php
include("connection.php");
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$loc=$_POST['loc'];
	$mobile=$_POST['mobile'];
	$age=$_POST['age'];
	$pass=$_POST['pass'];
	//customer id generation
	$num=rand(10,100);
	$cus_id="c-".$num;
	
	
	
	$query="insert into customer values('$cus_id','$name','$loc',$mobile ,'$age','$email','$pass')";
	if(mysqli_query($con,$query))
	{
		echo "Successfully inserted!";
	
    }
	else
	{
		echo "error!".mysqli_error($con);
	}
}
?>