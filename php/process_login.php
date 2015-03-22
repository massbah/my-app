<?php
require '../config/configuration.php';
require '../connect/Connect.php';
require '../tools/user.php';

$num=filter_input(INPUT_POST, 'username',FILTER_SANITIZE_NUMBER_INT);
$pass=filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);
//echo $num;
//echo $pass;
  $obj=new User();
  
  $obj->setMatNumber($num);
  $obj->setPassword($pass);
  
  $mat_num=$obj->getMatNumber();
  $pass=$obj->getPassword();
  //echo $mat_num;
  //echo $pass;
  $obj->login($mat_num, $pass);
  //var_dump($obj);

 ?>