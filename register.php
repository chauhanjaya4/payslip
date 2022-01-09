<?php
include'config.php';
include'header.php';
// Create connection

if(isset($_POST["submit"]))
{
	$user_login = $_POST['user_login'];
	$user_email = $_POST['user_email'];
	$user_pass = $_POST['user_pass'];
  $user_pass = md5($user_pass);

  $user_role = $_POST['user_role'];

	$sql = "SELECT * FROM wp_users where user_login='$user_login' and user_pass='$user_pass' ";

	
	$result = mysqli_query($con, $sql);
	if (mysqli_num_rows($result) > 0) 
  {
        // output data of each row
        echo"<script>
        alert('user name or password already exists');
       </script>";
           
    }  // while($row = mysqli_fetch_assoc($result)) {
else
{
$sql = "INSERT INTO wp_users (user_login, user_email,user_pass,user_role)
VALUES ('$user_login', '$user_email', '$user_pass', '$user_role')";

if ($con->query($sql) === TRUE) {
   header('Location:user_view.php');
   } 
else
{
  echo"<script>
  alert('Error inserting file.');
 </script>";
}//conn query

  }//msqli__num_rows



  

  } //isset   

        
$con->close();
?>





	




	</style>
</head>
<div><img src="images/1.png" style="float:right;margin:50px;padding:10px auto;height:5%;width:5%;"	></div>
<div><img src="images/trfltd-logo.png"  style="float:left;margin:50px;padding:10px auto;height:10%;width:10%;"	></div>
<body >

<div class="login1">

	 <div class="form1" class="login-form1">
				<form name="frm1" action="" method="post" enctype="multipart/form-data">
        <label for="user_login" >Check Number</label>
					<input type="text" name="user_login"  placeholder="enter check number"  required>
					<label for="user_email" >Email id</label>
					<input type="email" name="user_email" value="Email" placeholder="enter email id" required>
          <label for="user_pass" >Password</label>
          <input type="password" name="user_pass" value="user_pass" placeholder="enter password" required>
          
					
					<br><br>
				
					<input type="submit" name="submit" class="btn btn-primary" value="Add User">
				</form>
				<a href="user_view.php" class="btn btn-primary text-white">Back To Home</a>
			</div>
			
			
			
		</div>

    
	<script src="js/proton.js"></script>
</body>

<script type="text/javascript"> 
     window.setTimeout(function() {
    $("#deletesuccess").fadeTo(20, 0).slideUp(20, function(){
        $(this).remove(); 
    });
}, 1200);
    </script>
</html>


