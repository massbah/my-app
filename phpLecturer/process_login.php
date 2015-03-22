<?php 
session_start();
require("../php/mass_connect.php");

$id=$_POST['id'];

$pass=$_POST['inputPassword'];

var_dump($id);
var_dump($pass);
if(empty($id) || empty($pass)) {
  
  echo "One or more fields is empty";

}
else
{     
		 $query="SELECT * FROM lecturers WHERE lect_id='$id' and password='$pass'";
		 $result=mysqli_query($connect,$query);
		 $rows_found=mysqli_num_rows($result);
		 //var_dump($rows_found);
		// exit();
		  if($rows_found===1){
		  	
		  	$_SESSION['login_lect']=true;
		  	$_SESSION['lect_id']=$id;
		  	echo "true";
		  	header("location: lectDash.php");
		  }
		  else
		  {
		  	echo "false";
		  }   
}





 ?>