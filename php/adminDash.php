<?php 
session_start();

        if(!$_SESSION['login_admin']){
            header("location: ../index.php");
        }
        $admin=$_SESSION['admin_username'];
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
                    <li role="presentation" class="active "><a href="?page=profile"><span class="glyphicon glyphicon-user"></span><?php echo $admin ?></a></li>
               </ul>
          </div>
          <div class="col-sm-4">
                    <a href="?page=settings" class='btn btn-primary'><span class="glyphicon glyphicon-wrench"></span>Settings</a>
                    <a href="logout.php" class='btn btn-danger'><span class="glyphicon glyphicon-plus"></span>Logout</a>
          </div>         
              

        </div>
        <div class="row admin-guide" >
           <div class="col-sm-3">

              <ul class="nav nav-pills nav-stacked massay-color">
                <li role="presentation"><a href="?page=student"><span class="glyphicon glyphicon-plus"></span>Add Student</a></li>
                <li role="presentation"><a href="?page=lect"><span class="glyphicon glyphicon-plus"></span>Add Lecturer</a></li>
                  <li role="presentation"><a href="?page=new-course"><span class="glyphicon glyphicon-plus"></span>Add Course</a></li>
                <li role="presentation"><a href="?page=all_courses"><span class="glyphicon glyphicon-menu-hamburger"></span>All Courses</a></li>
                <li role="presentation"><a href="?page=all_students"><span class="glyphicon glyphicon-education"></span>All Student</a></li>
                <li role="presentation"><a href="?page=all_lecturers"><span class="glyphicon glyphicon-user"></span>All Lecturers</a></li>
                <li role="presentation"><a href="?page=on_going_courses"><span class="glyphicon glyphicon-user"></span>On Going Courses</a></li>
                <li role="presentation"><a href="?page=unoffered_courses"><span class="glyphicon glyphicon-magnet"></span>noffered Courses</a></li>
              </ul>
            
           </div>
           <div class="col-sm-8" id="pages">
                  <?php 
                   //offer_courses.php
                    switch ($_GET['page']){
                      case 'student':
                       include "addstudent.php";
                        break;
                        case 'on_going_courses':
                       include "offer_courses.php";
                        break;
                        case 'new-course':
                       include "addcourse.php";
                        break;
                        case 'profile':
                       include "admin_profile.php";
                        break;
                        case 'settings':
                        include "admin_settings.php";
                        break;
                      case 'lect':
                       
                      include "add_lect.php";
                        break;
                        case "update":
                        include"admin_update.php";
                        break;
                      case 'all_courses':
                        
                      include "all_courses.php";
                        break;
                      case 'updateStudent':
                      include "update_student.php";
                      break; 
                      case 'update_course': 
                      include "update_course.php";
                        break;
                      case 'all_students':
                      include "all_students.php";
                        break;
                      case 'all_lecturers':
                       
                      include "all_lecturers.php";
                        break;
                      case 'unoffered_courses':
                        
                      include "unoffered_c.php";
                        break; 
                      case 'manage_students':
                       
                      include "manage_students.php";
                        break; 
                      case 'manage_lecturers':
                      include "manage_lecturers.php";
                        break;
                       case 'deleteCourse':
                       include "deleteCourse.php";
                       break; 
                        case 'deleteStudent':
                       include "deleteStudent.php";
                       break; 
                        default:
                      include "admin_home.php";
                    }
              ?>
            
           </div>

       
        </div>

     
      </div>
  	       <script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
     <script type="text/javascript" src="../dist/js/bootstrap.min.js"></script>
          <script type="text/javascript" src="../js/jquery_cnd.js"></script>
       <script type="text/javascript" src="../js/js_form_plugin.js"></script>
     <script type="text/javascript" src="../dist/js/npm.js"></script>
     <script type="text/javascript" src="../js/js.js"></script>
  </body>

  </html>