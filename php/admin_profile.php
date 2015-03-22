<?php 
require_once("mass_connect.php");
session_start();
 ?>

<h1>PROFILE</h1>

<?php 
//$connect;

$username=$_SESSION['admin_username'];
//echo $username;

   
		 $query="SELECT * FROM admin WHERE username='$username'";
		 $result=mysqli_query($connect,$query);
		 $rows_found=mysqli_num_rows($result);
		 
		  if($rows_found >=1){
		  	   
		  	  while($row=mysqli_fetch_row($result)){
 ?>
<table class="table table-hover">
	
	<thead>
		<tr>
			<th>Property</th>
			<th>Value</th>
		</tr>
 
	</thead>
	<tbody>
		    <tr>
		    	<td><b>UserName</b></td>
		    	<td><?php echo $row[1]?></td>
		    </tr>
		    <tr>
		    	<td><b>FirstName</b></td>
		    	<td><?php echo $row[2]?></td>
		    </tr>
		    <tr>
		    	<td><b>Middle Name</b></td>
		    	<td><?php echo $row[3]?></td>
		    </tr>
		    <tr>
		    	<td><b>Last Name</b></td>
		    	<td><?php echo $row[4]?></td>
		    </tr>
		    <tr>
		    	<td><b>Email</b></td>
		    	<td><?php echo $row[6]?></td>
		    </tr>
	</tbody>

</table>
<a href="?page=settings" class="btn btn-primary" role="submit">Change Settings</a>

<?php
		  	   }
		  }
?>
