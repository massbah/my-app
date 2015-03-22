<?php 
 session_start();
require("mass_connect.php");
  	$id=$_POST['lect_id'];
 	$fn=$_POST['firstname'];
 	$md=$_POST['middlename'];
 	$ln=$_POST['last_name'];
 	$email=$_POST['email'];
 	$age=$_POST['age'];
 	$pw=$_POST['password'];
 	$pw2=$_POST['password_r'];
 	$gender=$_POST['gender'];
 	
    $query="SELECT * FROM lecturers WHERE lect_id='$id' OR email='$email'";
    $result=mysqli_query($connect,$query);
    $num=mysqli_num_rows($result);
    if($num==0){

    	   if($pw === $pw2 && (!empty($pw) && !empty($pw2)))
    	   {
      //id 	lect_id 	firstname 	middlename 	lastname 	age 	email 	gender 	password 	active 
    	   	   $insert="INSERT INTO lecturers (lect_id,firstname,middlename,lastname,age,email,gender,password,active)
    	   	    VALUES ('$id','$fn','$md','$ln','$age','$email','$gender','$pw',1)";
    	   	     $query=mysqli_query($connect,$insert);

    	   	      if($query){
    	   	      	echo "true";
    	   	      }
    	   	      else
    	   	      {
    	   	        echo "false";	
    	   	      }       
			}
			else
			{
			    	echo "false";
			}
    }
    else
    {
       return "false";

    }
 ?>
