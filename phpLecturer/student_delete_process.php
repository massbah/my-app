<?php 
require("../php/mass_connect.php");  

$name=$_POST['name'];
$course=$_POST['course'];

$query="DELETE FROM enrollment WHERE student_id='$name' and enrollment_id='$course'";
 
$result=mysqli_query($connect,$query);
if(!$result){
	echo "We have Problem connecting to the db";
}
else{
	echo "Student with $name is Successfully remove from Course List";
} 

// echo $name."<br/>";
// echo $course."<br/>";
// echo "deleting......";
 ?>