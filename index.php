 <?php
 session_start();
 require_once 'tools/user.php'; 
 require_once 'connect/Connect.php';
 if($_SESSION['login']){
 	//die("You do no have access to this page");
 	header("location:php/successlogin.php");
 }
 require_once "includes/header.php";
 ?>

<!--       <div id="myCarousel" class="carousel slide">
<!-- Carousel items -->
<!-- <div class="homeScreen carousel-inner">
<div class="active item">   
  <img src="img/big/img1.jpg"/>
  <div class="uplift carousel-caption">
   School of ITC,University of The Gambia 
  </div>

</div>
<div class="item">
<img src="img/big/img2.jpg"/>
  <div class="uplift carousel-caption">
   IT Conference 2014
  </div>
</div>
<div class="item">
 <img src="img/big/img3.jpg"/>
  <div class="uplift carousel-caption">
   Women and ITC
  </div>
</div>
<div class="item">
 <img src="img/big/img4.jpg"/>
  <div class="uplift carousel-caption">
   Computer  Programmers
  </div>
</div>
</div>
<!-- Carousel nav -->
<!-- <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>
      
      <div class="row">
        <div class="jumbotron">
          <h1 class="center">School Of ITC Course Registeration System</h1>
          <button class="btn btn-primary btn-lg" data-toggle="popover" id="rn" title="Register Before time" data-content="bewise bro">Register Now</button>
        </div>
      </div>
      
      <div class="row">
       <div class="col-lg-4">
        <img class="img-circle custom-size-image" src="img/teach.jpg">
        <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
<button class="btn btn-primary">Read More</button>
        </p>
       </div>
       <div class="col-lg-4">
       <img class="custom-size-image img-circle" src="img/teacher.jpg">
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum
<button class="btn btn-primary">Read More</button>.</p>
       </div>
       <div class="col-lg-4">
       <img class="img-circle custom-size-image" src="img/lecturer.jpg">
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
<button class="btn btn-primary">Read More</button>
</p>
       </div>
      </div>
    
    
   
    <div id="Register_now" class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                <button class="close" data-dismiss="modal" aria-hidden="true" >&times;</button>
                <h1 class="modal-title">Welcome</h1>
              </div>
              <div class="modal-body">
                 <p>Register Now to Select Your Courses</p>
                      <form class="form-horizontal" form-group  method="post" action="php/process_registeration.php">
      <div class="form-group" form-group>
        <label for="username" class="col-sm-2 control-label">Mat number</label>
       <div class="col-sm-8">
       <input type="number" class="form-control" name="matnumber" id="matnumber" placeholder="Mat Number" required/>
       </div>
      </div>
       <!--<div class="alert alert-danger">Error ! Change few things.</div>-->
      
 <!--      <div class="form-group" form-group>
        <label class="col-sm-2 control-label">Firstname</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="firstname" name="firstname" placeholder="FirstName" required/>
        </div>
      </div>
       
      <div class="form-group" form-group>
        <label class="col-sm-2 control-label">MiddleName</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="middlename" name="middlename" placeholder="middlename"/>
        </div>
      </div>
      
      <div class="form-group" form-group>
        <label class="col-sm-2 control-label">Last Name</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="lastname" name="lastname" placeholder="lastname" required/>
        </div>
      </div>
       
      
        <div class="radio">
        <label class="col-sm-2 control-label">Gender</label>
        <label class="col-sm-1 control-label">
        <input type="radio" name="gender" value="male" id="male"/>
        Male
        </label>     
        <label class="col-sm-1 control-label">  
        <input type="radio" name="gender" value="female" id="female" select/>
        Female
        </label>
        
        </div>

      <br/>
      <div class="form-group" form-group>
        <label class="col-sm-2 control-label">Major</label>
        <div class="col-sm-4">
          <select name="major">
            <option>Computer Science</option>
            <option>Information</option>
          </select>
        </div>
      </div>
      
      <div class="form-group" form-group>
        <label class="col-sm-2 control-label">Password</label>
        <div class="col-sm-4">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" required/>
        </div>
      </div>
       <div class="form-group" form-group>
        <label class="col-sm-2 control-label">Retype-Password</label>
        <div class="col-sm-4">
          <input type="password" class="form-control" id="password2" name="password2" placeholder="Password Again" required/>
        </div>
      </div>
      
      <div class="form-group" form-group>
        <label class="col-sm-2 control-label">Email</label>
        <div class="col-sm-4">
          <input type="email" class="form-control" id="email" name="email" placeholder="email" required/>
        </div>
      </div>
      
       <label for="submit" class="col-sm-2 control-label">&nbsp</label>
       <button class="btn btn-primary col-sm-6">REGISTER</button>
       
     </form>
        
                     
              </div>
              <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-danger">Cancel</button>
              </div>
          </div> 

      </div>
    </div> 


   <!--This is the welcome screen-->
    <!-- <div id="pack" class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                <button class="close" data-dismiss="modal" aria-hidden="true" >&times;</button>
                <h1 class="modal-title">Welcome</h1>
              </div>
              <div class="modal-body">
                 <p>UTG,SCHOOL OF INFORMATION,TECHNOLOGY AND COMMUNICATION,Course System</p>
        
                     <form class="form-horizontal" role="form" method="post" action="php/process_login.php">
                         <div class="form-group" form-group-lg>
                             <label for="email" class="col-sm-2 control-label">User</label>
                             <div class="col-sm-4">
                             <input type="text" name="username" class="form-control" id="username" placeholder="Mat Number" required/>    
                             </div>
                         </div>

                         <div class="form-group" form-group-sm>
                           <label for="password" class="col-sm-2 control-label">Password</label>
                           <div class="col-sm-4">
                             <input type="password" name="password" class="form-control" id="inputpassword" placeholder="password" required/>
                           </div>

                         </div>
                         <div class="form-group">
                          
                          <div class="col-sm-offset-2 col-sm-4">
                            <button type="submit" class="btn btn-primary">
                            <span class="glyphicon glyphicon-log-in"></span> Login
                            </button>
                          </div>

                          </div>
                           

                     </form>
              </div>
              <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-danger">Quit</button>
               
              </div>
          </div> 

      </div>
    </div>  -->
     <!--Start........Th is is the welcome screen--> 
     
<?php
 require_once "includes/footer.php";
?>