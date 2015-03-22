<?php 
require_once "includes/header.php";
?>
  <div class="register row">
      <div class="col-lg-8">
     <form class="form-horizontal" form-group  method="post" action="php/process_registeration.php">
      <div class="form-group" form-group>
        <label for="username" class="col-sm-2 control-label">Mat number</label>
       <div class="col-sm-8">
       <input type="number" class="form-control" name="matnumber" id="matnumber" placeholder="Mat Number" required/>
       </div>
      </div>
       <!--<div class="alert alert-danger">Error ! Change few things.</div>-->
      
      <div class="form-group" form-group>
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
       <button class="btn btn-primary col-sm-6">Am Done.Get Me Started</button>
       
     </form>
      </div>
      <div class="col-lg-4">
      
        This is B
      </div>
  </div>
<?php
 require_once "includes/footer.php";
?>