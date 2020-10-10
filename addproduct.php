
<!doctype html>
<html lang="en">
  <head>
    <title>
        
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="signup.css">
<link rel="stylesheet" type="text/css" href="style.css">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/FitText.js/1.1/jquery.fittext.min.css"></script> 
     
 
    <title>Library Managemant</title>
  </head>
  <body>
  <div class="topnav">
  <a href="index.php">Home</a>

  <a href="signup.php">SignUp</a>
  <a href="addproduct.php">AddBook</a>
  <a href="borrowbook.php">Borrow Book</a>
  <a href="return.php">Return Book</a>
</div>

<form action="" method="post">
    <div class="container box pb-3">
  <div class=" d-flex justify-content-center">
       </div>     
       <div class="row">
    <div class="col-25">
      <label for="book">Book Name</label>
    </div>
    <div class="col-75">
    <input type="text"  placeholder="Enter your book name...." name="bookName" id="userName" autocomplete="off">
        <span id="userNameMess" class="text-danger"></span>
    </div>
  </div> 

  <div class="row">
    <div class="col-25">
      <label for="book">Publisher Name</label>
    </div>
    <div class="col-75">
    <input type="text"  placeholder="Enter Publisher name here.." name="pbname"  >
              <span id="userEmailMess" class="text-danger"></span>
    </div>
  </div> 
  <div class="row">
    <div class="col-25">
      <label for="book">Subject Name</label>
    </div>
    <div class="col-75">
    <input type="text"  placeholder="Subject of book Name..." name="sub" >
      <span id="userNumMess" class="text-danger"></span>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="book">Author Name</label>
    </div>
    <div class="col-75">
    <input type="text"  placeholder="Author Name...." name="pbdate" >
 <span id="userNumMess" class="text-danger"></span>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="book">Edition</label>
    </div>
    <div class="col-75">
    <input type="text" placeholder="Enter edition..." name="edition" id="" >
       <span id="userpassMess" class="text-danger"></span>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="book">ISBN Number</label>
    </div>
    <div class="col-75">
    <input type="text"  placeholder="Enter isbn number here.." name="isbn">
   <span id="userNumMess" class="text-danger"></span>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="book">Book Copy</label>
    </div>
    <div class="col-75">
    <input type="text"  placeholder="add book copy here" name="ncopy">
    <span id="userNumMess" class="text-danger"></span>
    </div>
  </div>
 
                                    
  <div class="my-2 d-flex" >
        <input type="submit" class="btn btn-sm btn-outline-danger btnSin px-5 font-weight-bolder mt-3" value="ADD book" name="add" required>
      </div>
 </div>
  </form>
    <div class=" d-flex justify-content-center"></div>
    <div class="topnav">
  
  <a href="addproduct.php">deleteBook</a>
 
</div>

    <form action="" method="post">
       <input class="form-control mr-sm-2" type="text" name="isbn" placeholder="Enter isbn number">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="delete" >Delete</button>
      
    </form>
   

                            <?php

$con = mysqli_connect("localhost","root","","shop");

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


          if(isset($_POST['delete'])){
            $on1=$_POST['isbn'];
            $query1 = "DELETE FROM book WHERE isbn='$on1'";
            $data=mysqli_query($con,$query1);
            if($data == TRUE)
            {
                echo "<script>alert('Data Deleted successfully..!');window.location='';</script>";   
            }
	else{echo mysqli_error($con);}
            
        
        }
            
        

if(isset($_POST['add'])){
	$name=$_POST['bookName'];
	$pbname=$_POST['pbname'];
    $pbdate=$_POST['pbdate'];
    $sub=$_POST['sub'];
    $edition=$_POST['edition'];
    $isbn=$_POST['isbn'];
    $ncopy=$_POST['ncopy'];
    
	if($name=="" || $pbname=="" || $pbdate=="" || $edition==""  || $isbn==""  || $ncopy=="" || $sub==""  ){
		echo "error";
		}

	$insert="INSERT INTO book(name,pbname,pbdate,sub,edition,isbn,ncopy) VALUES('$name','$pbname','$pbdate','$sub','$edition','$isbn','$ncopy')"; 
	$data=mysqli_query($con,$insert);
	if($data == TRUE)
            {
                echo "<script>alert('Data insertes successfully..!');window.location='';</script>";   
            }
	else{echo mysqli_error($con);}
}
?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>