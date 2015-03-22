<?php
require '../config/configuration.php';
require '../connect/Connect.php';
require '../tools/user.php';

$obj=new User();

$obj->logout();

?>