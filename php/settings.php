<?php
$c=new Course();

$current_user=new User();

$num=$current_user->getNumberOfCourses($_SESSION['id_num']);

?>

           <?php 
         
            $current_user->getInformationAboutMe($_SESSION['id_num']);
            
            ?>
