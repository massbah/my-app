<?php 
require("mass_connect.php");

$code=$_POST['code'];
$c_name=$_POST['c_name'];
$hour=$_POST['crdhour'];
$desc=$_POST['desc'];
// echo $code."<br/>";
// echo $c_name."<br/>";
// echo $hour."<br/>";
// echo $desc."<br/>";
$query="UPDATE courses SET course_name='$c_name',
course_credithour='$hour',course_details='$desc' WHERE course_code='$code'";
$result=mysqli_query($connect,$query);

if(!$result){
 die("Error in Updating....");
}
else
{
   echo "Updated Sucessfully: <a href='?page=all_courses'>view courses</a>";

 }


// $query="UPDATE admin SET firstname='$fn',lastname='$lastname',middlename='$middlename',
// password='$password',email='$email' WHERE username='$username'";
// $result=mysqli_query($connect,$query);
// //var_dump($result);

// if(!$result){
//  die("Error in Updating....");
// }
// else
// {
//    echo "Updated Sucessfully: <a href='?page=profile'>View Profile</a>";

//  }


 ?>