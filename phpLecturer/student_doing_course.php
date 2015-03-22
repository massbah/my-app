<?php
session_start();
require("../php/mass_connect.php");
$id=$_SESSION['lect_id'];
$code=$_GET['code'];
$query="select s.firstname,s.middlename,s.lastname,matnumber,email,
gender,major from enrollment as e INNER JOIN students as s ON 
e.student_id=s.matnumber where enrollment_id='$code'";

$result=mysqli_query($connect,$query);
//var_dump($result);

 ?>

 <table class="table table-hover">
 <thead>
 	<tr>
 		<th class="success">Name</th>
 		<th class="success">Mat #</th>
 		<th class="success">Gender</th>
 		<th class="success">Major</th>
 		<th class="success">MORE</th>
 	</tr>

 </thead>
 <tbody>
<!--     <tr colspan="4">
  	 <p>Student's doing</p>
  </tr> -->
  <?php
   //var_dump($result);
   while($row=mysqli_fetch_row($result)){ 	

 ?>

   <tr>
   	 <td><?php echo $row[0]." ".$row[1]." ".$row[2] ?></td>
   	 <td><?php echo $row[3] ?></td>
   	 <td><?php echo $row[5] ?></td>
   	 <td><?php echo $row[6] ?></td>
   	 <td><a data-toggle="modal" data-target="#modal<?php echo $row[3] ?>" href="#" role="submit" class="btn btn-success">View <?php echo $row[0]."'s Profile"?></a></td>
   </tr>
   <div class="modal fade" id="modal<?php echo $row[3] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $row[0]." 's Information"?></h4>
      </div>
      <div class="modal-body">
	<form>
	<div class="form-group">
	<label for="exampleInputEmail1">First Name</label>
	<input type="email" class="form-control" id="exampleInputEmail1" readOnly placeholder="<?php echo $row[0]?>">
	</div>
	<div class="form-group">
	<label for="exampleInputPassword1">Midde Name</label>
	<input type="password" class="form-control" id="exampleInputPassword1" readOnly placeholder="<?php echo $row[1]?>">
	</div>
		<div class="form-group">
	<label for="exampleInputPassword1">Last Name</label>
	<input type="password" class="form-control" id="exampleInputPassword1" readOnly placeholder="<?php echo $row[2]?>">
	</div>
	<div class="form-group">
	<label for="exampleInputPassword1">Mat Number</label>
	<input type="password" class="form-control" id="exampleInputPassword1" readOnly placeholder="<?php echo $row[3]?>">
	</div>
		<div class="form-group">
	<label for="exampleInputPassword1">Email</label>
	<input type="password" class="form-control" id="exampleInputPassword1" readOnly placeholder="<?php echo $row[4]?>">
	</div>
		
	</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
 <?php
}

 ?>
 </tbody>
 </table>