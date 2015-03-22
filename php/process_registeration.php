<?php 
require "../config/configuration.php";
require "../connect/Connect.php";
require '../tools/user.php';

$mat_number=filter_input(INPUT_POST, 'matnumber',FILTER_SANITIZE_NUMBER_INT);

$firstname=filter_input(INPUT_POST, 'firstname',FILTER_SANITIZE_STRING);

$middlename=filter_input(INPUT_POST, 'middlename',FILTER_SANITIZE_STRING);

$lastname=filter_input(INPUT_POST, 'lastname',FILTER_SANITIZE_STRING);

$gender=filter_input(INPUT_POST, 'gender',FILTER_SANITIZE_STRING);

$major=filter_input(INPUT_POST, 'major',FILTER_SANITIZE_STRING);

$email=filter_input(INPUT_POST, 'email',FILTER_SANITIZE_STRING);

$password=filter_input(INPUT_POST, 'password',FILTER_SANITIZE_STRING);

$password2=filter_input(INPUT_POST, 'password2',FILTER_SANITIZE_STRING);

$user=new User();
//$user->checkIfUserExist(2112191);
//var_dump($user);
$user->register($mat_number, $firstname, $middlename, $lastname, $gender, $email, $password, $major);

?>