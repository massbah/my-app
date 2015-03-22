<form method="get" post="admin_home.php">
  <div class="form-group">
    <center><label for="search">LIVE SEARCH</label></center>
    <input type="text" class="form-control" name="search" id="search" placeholder="Search For Names or Mat Numbers or Lecturer Id">
  </div>
  <button type="submit" class="btn btn-default">Search</button>
</form>

<div class="row">
  
  <?php
require("mass_connect.php");
  if(isset($_GET['search'])){
  
  $value=$_GET['search'];
    if(empty($value)){

      echo "Nothing Entered";
      exit();
    }
 
  $query="SELECT * FROM students WHERE firstname LIKE '$value%' or  lastname LIKE '$value%'
      or  matnumber LIKE '$value%'  LIMIT 10";
  //echo $value;
   $result=mysqli_query($connect,$query);
   $num=mysqli_num_rows($result);
    if($num==0){
      echo "No Result For students";
    }
    else{
      echo "<br/>";
       echo "Result Found For students";
   ?>
     <table class="table table-hover">
       
       <tbody>
   <?php
   while($row=mysqli_fetch_row($result)){
      ?>
      <!-- echo $row[1]." ".$row[2]." ".$row[3]." ".$row[2]." ".$row[1]; -->
       <tr>
      <td><?php echo $row[1]?></td>
      <td><?php echo $row[2]?></td>
      <td><?php echo $row[3]." ".$row[4]." ".$row[5]?></td>
      <td><?php echo $row[6]?></td
    
       </tr>
      <?php
    }
   }
   ?>
    </tbody>
     </table>
   <?php
 }
 

?>
</div>
<div class="row">
  
  <?php
   $connect=mysqli_connect("localhost","root","iamme","juniorProject");
  if(!connect){
    die("You are not connected");
  }
  
  if(isset($_GET['search'])){
  
  $value=$_GET['search'];
    if(empty($value)){

      echo "Nothing Entered";
      exit();
    }
 
  $query="SELECT * FROM lecturers WHERE firstname LIKE '$value%' or  lastname LIKE '$value%'
      or  lect_id LIKE '$value%'  LIMIT 10";
  //echo $value;
   $result=mysqli_query($connect,$query);
    if(mysqli_num_rows($result)==0 && $num==0){
      //echo "No Result Found";
      exit();
    }
    echo "<br/>";
     echo "Lecturer results Found";
   ?>
     <table class="table table-hover ">
       <thead>
        
       
       </thead>
       <tbody>
   <?php
   while($row=mysqli_fetch_row($result)){
      ?>
      <!-- echo $row[1]." ".$row[2]." ".$row[3]." ".$row[2]." ".$row[1]; -->
       <tr>
      <td><?php echo $row[1]?></td>
      <td><?php echo $row[2]?></td>
      <td><?php echo $row[3]." ".$row[4]." ".$row[5]?></td>
      <td><?php echo $row[6]?></td
    
       </tr>
      <?php
   }
   exit();
   ?>
    </tbody>
     </table>
   <?php
 }
 

?>
</div>

<section id="services">
        <div class="container">
            <div class="box first">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="center">
                            <a href="?page=all_students"><i class="btn btn-danger glyphicon glyphicon-education"></i></a>
                            <h4>Student Management</h4>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="center">
                            <a href="?page=all_lecturers"><i class="btn btn-primary glyphicon glyphicon-folder-open"></i></a>
                            <h4>Lecturer Management</h4>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                        </div>
                    </div><!--/.col-md-4-->
                </div>
                <div class="row">  
                    <div class="col-md-4 col-sm-6">
                        <div class="center">
                            <i class="btn btn-default glyphicon glyphicon-briefcase"></i>
                            <h4>Uer Friendly UI</h4>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="center">
                            <a data-toggle="modal" data-target="#guide"><i class="btn btn-success glyphicon glyphicon-thumbs-up"></i></a>
                            <h4>UTG CRS User Guide</h4>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#services-->


  <div class="modal fade" id="guide" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">GUIDE for<?php echo " :".$admin?></h4>
      </div>
      <div class="modal-body">
         <h1>GUIDE FOR AMDINSTRATION</h1>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
         <p><a href="../help.txt">Help</a></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
         <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#guide2">Next</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="guide2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Using The App</h4>
      </div>
      <div class="modal-body">
         <h1>How to Use The App</h1>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
         <p><a href="../help.txt">More</a></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <a type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#guide3">End</a>
    </div>
  </div>
</div>

