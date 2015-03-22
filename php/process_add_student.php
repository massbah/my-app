<?php 
 session_start();
require("mass_connect.php");
  $id=$_POST['mat'];
 	$fn=$_POST['firstname'];
 	$md=$_POST['middlename'];
 	$ln=$_POST['last_name'];
 	$email=$_POST['email'];
  $major=$_POST['major'];
 	$pw=$_POST['password'];
 	$pw2=$_POST['password_r'];
 	$gender=$_POST['gender'];

 //      echo $id."<br/>";
 //       echo $fn."<br/>";
 // echo $md."<br/>";
 // echo $ln."<br/>";
 // echo $email."<br/>";
 // echo $major."<br/>";
 // echo $pw."<br/>";
 // echo $pw2."<br/>";
 // echo $gender."<br/>";
  //exit();
 	
    $query="SELECT * FROM students WHERE matnumber='$id' OR email='$email'";

    $result=mysqli_query($connect,$query);
    $num=mysqli_num_rows($result);
   //var_dump($num);
      //exit();
    if($num==0){

    	   if($pw === $pw2 && (!empty($pw) && !empty($pw2)))
    	   {
           $date=date("d/m/Y");
    	   $insert="INSERT INTO students 
               (matnumber,firstname,middlename,lastname,email,gender,active,password,major,joinDate)
    	   	    VALUES ('$id','$fn','$md','$ln','$email','$gender',1,'$pw','$major','$date')";
    	   	     $query=mysqli_query($connect,$insert);
                 //var_dump($query);
                 //exit();
    	   	      if($query){
    	   	      	echo "true";
    	   	      }
    	   	           
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
    
 ?>
