<?php 
session_start();

        if(!$_SESSION['login_lect']){
            header("location: ../index.php");
        }
        $lecturer=$_SESSION['lect_id'];
 ?>
<!DOCTYPE html>
 <html>
  <head>
   <title>DashBoard</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../dist/css/bootstrap.min.css" type="text/css">
   <link rel="stylesheet" href="../dist/css/bootstrap-theme.css" type="text/css">
   <link rel="stylesheet" href="../css/style.css" type="text/css">
  </head>
  <body>

      <div class="container">

        <div class="row admin-guide"> 
          <div class="col-sm-8">
            
             <ul class="nav nav-tabs">
                    <li role="presentation" class="active"><a href="?admin_home.php"><span class="glyphicon glyphicon-home"></span>DashBoard</a></li>
                    <li role="presentation" class="active "><a href="?page=profile"><span class="glyphicon glyphicon-user"></span><?php echo $lecturer ?></a></li>
               </ul>
          </div>
          <div class="col-sm-4">
                    <a href="?page=settings" class='btn btn-primary'><span class="glyphicon glyphicon-wrench"></span>Settings</a>
                    <a href="logout.php" class='btn btn-danger'><span class="glyphicon glyphicon-plus"></span>Logout</a>
          </div>         
              

        </div>
        <div class="row admin-guide" >
           <div class="col-sm-3">

        <ul class="nav nav-pills nav-stacked massay-color2">
          <li role="presentation"><a href="?page=all_courses"><span class="glyphicon glyphicon-ok-circle"></span>My Courses</a></li>
          <li role="presentation"><a href="?page=all_students"><span class="glyphicon glyphicon-user"></span>My Students</a></li>
            <li role="presentation"><a href="?page=manage_students"><span class="glyphicon glyphicon-edit"></span>Manage Students</a></li>
          <li role="presentation"><a href="?page=assignments"><span class="glyphicon glyphicon-tasks"></span>Upload Assignments</a></li>
          <li role="presentation"><a href="?page=grades"><span class="glyphicon glyphicon-education"></span>Student Grades</a></li>
          <li role="presentation"><a href="?page=message"><span class="glyphicon glyphicon-envelope"></span>Broadcast message</a></li>
          <li role="presentation"><a href="?page=lecture_notes"><span class="glyphicon glyphicon-book"></span>Lecture Notes</a></li>
        </ul>
      
           </div>
           <div class="col-sm-8" id="pages">
                  <?php 
                   //offer_courses.php
                    switch ($_GET['page']){
                      case "all_courses":
                       include "all_courses.php";
                      break;
                      case "all_students":
                       include "all_students.php";
                      break;
                      case "students_in_class":
                      include "student_doing_course.php";
                      break;
                      case "manage_students":
                       include "manage_students.php";
                      break;
                      case "update":
                      include"update.php";
                      break;
                       case "manage_student_edit":
                       include "manage.php";
                      break;
                      case "assignments":
                       include "assignments.php";
                      break;
                      case "grades":
                       include "grades.php";
                      break;
                      case "message":
                       include "message.php";
                      break;
                      case "profile":
                       include "profile.php";
                      break;
                      case "settings":
                       include "settings.php";
                      break;
                      case "lecture_notes":
                       include "lecture_notes.php";
                      break;
                      case "grades_enter":
                      include "enterGrade.php";
                       break;
                       case "group_grade":
                       include "grade_group.php";
                       break;
                       default:
                      include "lect_home.php";
                    }
              ?>
            
           </div>

       
        </div>

     
      </div>
  	       <script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
           <script type="text/javascript" src="../js/jquery_cnd.js"></script>
       <script type="text/javascript" src="../js/js_form_plugin.js"></script>
     <script type="text/javascript" src="../dist/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="../dist/js/npm.js"></script>
     <script type="text/javascript" src="../js/js.js"></script>
        <script type="text/javascript" src="../js/saysay.js"></script>

  </body>

  </html>