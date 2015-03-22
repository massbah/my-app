<?php
  require '../config/configuration.php';
  require '../connect/Connect.php';
  require 'course.php';
  require 'user.php';
  
  $student=new User();
  
  $max_allow=6;
  
  //var_dump($student);
  //exit();
  $number=$_SESSION['id_num'];
  
  $student->setMatNumber($number);
  
  if(isset($_GET['add'])){
  	//echo $_POST['add'];
  	$offer_id=$_GET['add'];
  	if($student->getNumberOfCourses($number)==$max_allow){
  		echo "You have Six Courses already";
  		exit();
  	}
  	else
  	{
  		if(!($student->isCourseInList($offer_id))){
  			
  			$student->addCourse($offer_id);
  			echo "Added Successfully";
  		
  		}
  		else
  		{
  			echo "You are Already Doing This Course";
  		}
  		
  	}
  
  
  }
  
  if(isset($_GET['drop'])){
    $con=mysqli_connect("localhost","root","iamme","juniorProject");
  	$val=$_GET['drop'];
    
      $query="DELETE FROM enrollment WHERE id='$val'";

      $result=mysqli_query($con,$query);

      if(!$result)
      {
            echo "Error,Cannot Remove Course From List";
      }
      else
      {
            echo "Successfully Remove Course From List";
      }
  }
     
  // a student can add a couse 
  // drop a course

?>