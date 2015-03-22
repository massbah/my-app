<?php 
$matnum=$_SESSION['id_num'];
//echo $matnum;
$tester=new Course();
$course=new user();
$num=$course->getNumberOfCourses($_SESSION['id_num']);
?>

          <?php 
          if($num>0){
            $tester->showMyCourse($matnum);
          }
          else
          {
            ?>
            <div class='col-lg-8'>
            <p class="no-course btn-danger" >No have no more course(s) in Your List</p>
            <a class="select-course btn-info" href='successlogin.php'>start Selection</a>
            </div>
            <?php
          }
          
          ?>
