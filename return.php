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

  <div class="container">
  <form action="return.php" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-25">
      <label for="b_id">Write the book Id:</label>
    </div>
    <div class="col-75">
      <input type="text" id="b_id" name="b_id" placeholder="book id..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="m_id">Write the Member Id:</label>
    </div>
    <div class="col-75">
      <input type="text" id="m_id" name="m_id" placeholder="Your member Id..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="fine_day">The fine day</label>
    </div>
    <div class="col-75">
      <input type="date" id="fine_day" name="fine_day" placeholder="Your fine day..">
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
	$b_id=$_POST['b_id'];
	$m_id=$_POST['m_id'];
	$fine_day=$_POST['fine_day'];
	
	
	
	$query="insert into re values('$b_id','$m_id','$fine_day')";
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