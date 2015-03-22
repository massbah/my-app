<?php 
require_once("mass_connect.php");

$username=$_POST['username'];
$fn=$_POST['firstname'];
$lastname=$_POST['lastname'];
$middlename=$_POST['middlename'];
$password=$_POST['password'];
$email=$_POST['email'];
// echo $username."<br/>";
// echo $fn."<br/>";
// echo $lastname."<br/>";
// echo $middlename."<br/>";
// echo $password."<br/>";
// echo $email."<br/>";
$query="UPDATE admin SET firstname='$fn',lastname='$lastname',middlename='$middlename',
password='$password',email='$email' WHERE username='$username'";
$result=mysqli_query($connect,$query);
//var_dump($result);

if(!$result){
 die("Error in Updating....");
}
else
{
   echo "Updated Sucessfully: <a href='?page=profile'>View Profile</a>";

 }



?>
