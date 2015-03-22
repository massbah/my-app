<?php
$c=new Course();
$current_user=new User();
//$data=$current_user->getInformationAboutMe($_SESSION['id_num']);
$num=$current_user->getNumberOfCourses($_SESSION['id_num']);
$count=0;

 $c->getCourseMates($_SESSION['id_num']);

            
              ?>
