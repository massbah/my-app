<?php 
require("mass_connect.php");
$num=$_POST['matnumber'];
$fn=$_POST['firstname'];
$md=$_POST['middlename'];
$ln=$_POST['lastname'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$major=$_POST['major'];
$password=$_POST['password'];
// echo $num."<br/>";
// echo $fn."<br/>";
// echo $md."<br/>";
// echo $ln."<br/>";
// echo $email."<br/>";
// echo $gender."<br/>";


$query="UPDATE students SET firstname='$fn',lastname='$ln',middlename='$md',
gender='$gender',email='$email',major='$major',password='$password' WHERE matnumber='$num'";
$result=mysqli_query($connect,$query);

if(!$result){
 die("Error in Updating....");
}
else
{
   echo "Updated Sucessfully: <a href='?page=all_students'>view students</a>";

 }

 ?>