<?php
session_start(); 
if(!$_SESSION['login']){
  header("location: ../index.php");
}
require '../config/configuration.php';
require '../connect/Connect.php';
require '../tools/user.php';
require_once '../tools/course.php';



$c=new Course();

$current_user=new User();
//$data=$current_user->getInformationAboutMe($_SESSION['id_num']);
$num=$current_user->getNumberOfCourses($_SESSION['id_num']);
$count=0;

?>
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../dist/css/bootstrap.min.css" type="text/css">
   <link rel="stylesheet" href="../dist/css/bootstrap-theme.css" type="text/css">
   <style type="text/css">
   .mybox_sl{
    margin: 20px auto;
    padding: 20px;
    background-color: #eeeeee;
   }
    p.no-course{
  font-size: 30px;
  padding: 30px;
  text-align: center;
   }
   </style>
</head>


<body>

    <div class=" container">


      <div class="modal fade" id="goodAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel"><?php echo $data[2]." ".$data[3]?></h4>
            </div>
            <div class="modal-body">
              <p id="output" class="btn-primary no-course"></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

           

          <div class="mybox_sl row">
              <div class="col-lg-10">
              <ul class="nav nav-tabs">
		            <li class="active"><a href="?name=studentDash"><span class="glyphicon glyphicon-home"></span>Home</a></li>
		            <li><a href="?name=myCourses"><span class="glyphicon glyphicon-plus"></span>My Courses<span class="badge"><?php echo $num?></span></a></li>
		            <li><a href="?name=grades"><span class="glyphicon glyphicon-th-list"></span>Grades</a></li>
		            <li><a href="?name=mates"><span class="glyphicon glyphicon-user"></span>Class Mates</a></li>
                <li><a href="?name=chart"><span class="glyphicon glyphicon-th"></span>Chart</a></li>
                <li><a href="?name=settings"><span class="glyphicon glyphicon-pencil"></span>Settings</a></li>
            </ul>
              </div>
              <div class="col-lg-2">
                <a href="logout.php"> <button class="btn btn-danger"><span class="glyphicon glyphicon-off"></span>Logout</button></a>
                
              </div>
          </div>

          <div class="row">
             <div class="col-lg-3">
                <img src="../img/new/logo.png" class="img-responsive img-rounded" alt="Responsive image">
              <ul class="nav nav-horizontal">
                   
                    <li data-toggle="tooltip" class="showMeTitle" title="Download Your Lecture notes"><a href="#"><span class="glyphicon glyphicon-user"></span>Lecture notes</a></li>
                    <li data-toggle="tooltip" class="showMeTitle" title="view,download and subit your assignment"><a href="#"><span class="glyphicon glyphicon-user"></span>Assignments</a></li>
                    <li data-toggle="tooltip" class="showMeTitle" title="View your mates"><a href="#"><span class="glyphicon glyphicon-user"></span>Class Mates</a></li>
                    <li data-toggle="tooltip" class="showMeTitle" title="how well you are doing in school"><a href="#"><span class="glyphicon glyphicon-user"></span>Performance Analysis</a></li>
                    <li data-toggle="tooltip" class="showMeTitle" title="Send us a Message(admin)"><a href="#"><span class="glyphicon glyphicon-envelope"></span>Message</a></li>
              </ul>
            </div>
           
             <?php 
             switch ($_GET['name']) {
               case 'myCourses':
               include "mycourses.php";
                 break;
                 case "grades":
                 include"grades.php";
                 break;
                 case 'mates':
                 # code...
                 include "mates.php";
                 break;
                 case "grades":
                 include"grades.php";
                 break;case 'settings':
                 # code...
               include "settings.php";
                 break;
                 case "chart":
                 include"chart.php";
                 break;
               default:
                 # code...
                $data=$c->showOffering();
                 break;
             }
            // $data=$c->showAllCourse();
             
             ?>
          </div>
          </div>
    </div>


<script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
     <script type="text/javascript" src="../dist/js/bootstrap.js"></script>
     <script type="text/javascript" src="../dist/js/npm.js"></script>
     <script type="text/javascript" src="../js/js.js"></script>
</body>


</html>
