<?php 
session_start();
require("mass_connect.php");

$username=$_POST['username'];

$pass=$_POST['inputPassword'];

if(empty($username) || empty($pass)) {
  
  echo "One or more fields is empty";

}
else
{
           
		 $query="SELECT * FROM admin WHERE username='$username' and password='$pass'";
		 $result=mysqli_query($connect,$query);
		 $rows_found=mysqli_num_rows($result);
		 //var_dump($rows_found);
		// exit();
		  if($rows_found===1){
		  	
		  	$_SESSION['login_admin']=true;
		  	$_SESSION['admin_username']=$username;
		  	echo "true";
		  	//header("location: adminDash.php");
		  }
		  else
		  {
		  	echo "false";
		  }   
}





 ?>