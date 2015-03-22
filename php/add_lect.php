<center><h1>Adding new Lecturer</h1></center>

<form class="form-horizontal" action="actions.php" method="post" id="lecturer-form">
  <div class="form-group">
    <label for="lect_id" class="col-sm-2 control-label">Lecturer Id</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" name='lect_id' id="lect_id" placeholder="Lecturer Id" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">First Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name" required>
    </div>
  </div>
  <div class="form-group">
    <label for="middlename" class="col-sm-2 control-label">Middle Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="middlename" name="middlename" placeholder="Middle Name">
    </div>
  </div>
  <div class="form-group">
    <label for="last_name" class="col-sm-2 control-label">Last Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="last_name"name="last_name" placeholder="last_name" required>
    </div>
  </div>
  <div class="form-group">
    <label for="age" class="col-sm-2 control-label">Age</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" id="age"  name="age" placeholder="Age" required>
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-8">
      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
    </div>
  </div>
  <div class="form-group">
    <label for="password_r" class="col-sm-2 control-label">Retype-Password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="password_r" name="password_r" placeholder="ReType Password" required>
    </div>
  </div>
 
  <div class="form-group">

    <div class="col-sm-offset-2 col-sm-8">

      <div class="radio">
        <label>
          <input type="radio" name="gender" value="male">Male
        </label>
         <label>
          <input type="radio" name="gender" value="female">Female
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-4 col-sm-10">
      <button type="submit" id="doneLect" class="btn btn-primary" name="submitLect">Add To Lecturers</button>
       <button type="reset" class="btn btn-success">Reset</button>
    </div>
  </div>

</form>





<div class="modal fade" id="Result" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <p id="what"></p>
        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
