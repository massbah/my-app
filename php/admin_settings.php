<?php 
session_start();
require("mass_connect.php");

$username=$_SESSION['admin_username'];
//echo $username;

   
		 $query="SELECT * FROM admin WHERE username='$username'";
		 $result=mysqli_query($connect,$query);
		 $rows_found=mysqli_num_rows($result);
		 
		  if($rows_found >=1){
		  	   
		  	  while($row=mysqli_fetch_row($result)){
 ?>

<h1>SETTINGS</h1>
<form method="post" action="?page=update" id="admin_update_form">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" name="username" id="username" value="<?php echo $row[1] ?>" name="username" placeholder="<?php echo $row[1] ?>" Readonly>
  </div>
  <div class="form-group">
    <label for="firstname">FirstName</label>
    <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $row[2] ?>" placeholder="<?php echo $row[2] ?>">
  </div>
  <div class="form-group">
    <label for="middlename">Middle Name</label>
    <input type="text" class="form-control" id="middlename" name="middlename" value="<?php echo $row[3] ?>" name="middlename" placeholder="<?php echo $row[3] ?>">
  </div>
  <div class="form-group">
    <label for="lastname">Last Name</label>
    <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $row[4] ?>" name="lastname" placeholder="<?php echo $row[4] ?>">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="text" class="form-control" id="password" name="password" value="<?php echo $row[5] ?>"placeholder="<?php echo $row[5] ?>" required>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="<?php echo $row[6] ?>" placeholder="<?php echo $row[6] ?>" Readonly>
  </div>
  <button type="submit" class="btn btn-primary">Change Details</button>
</form>

<?php
		  	   }
		  }
?>