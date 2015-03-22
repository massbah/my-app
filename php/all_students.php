<center><h1>all students</h1></center>
<?php 
require("mass_connect.php");
 $query="SELECT * FROM students ORDER BY firstname LIMIT 10";
 $result=mysqli_query($connect,$query);
    ?>

     <table class="table table-hover table-bordered">
       <thead>
       	
       	<tr>
       		<th>Matnumber</th>
       		<th>Full Name</th>
       		<th>Gender</th>
       		<th>Email</th>
       		<th>Edit</th>
       		<th>Delete</th>

       	</tr>
       </thead>
       <tbody>
    <?php
  while($row=mysqli_fetch_row($result)){
    ?>
		 <tr>
		  <td class="active"><?php echo $row[1]?></td>
		  <td class="success"><?php echo $row[2]." ".$row[3]." ".$row[4]?></td>
		  <td class="warning"><?php echo $row[6]?></td>
		  <td class="danger"><?php echo $row[5]?></td>
       <td><a class="naj" data-toggle="modal" data-target="#Modal<?php echo $row[0]?>"><span class="btn btn-primary glyphicon glyphicon-edit"></span></a></td>
      <td><a class="naj" data-toggle="modal" data-target="#ModalD<?php echo $row[0]?>"><span class="btn btn-danger glyphicon glyphicon-remove"></span></a></td>
		</tr>

        <div class="modal fade c_c" id="Modal<?php echo $row[0]?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="ModalLabel"><?php echo $row[0]?></h4>
              </div>
              <div class="modal-body">
                <form method="post" action="?page=updateStudent">
                      <div class="form-group">
                        <label for="matnumber">Mat Number</label>
                        <input type="text" class="form-control" name="matnumber" id="matnumber" Readonly value="<?php echo $row[1] ?>" name="username" placeholder="<?php echo $row[1] ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $row[2] ?>" placeholder="<?php echo $row[2] ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="middlename">Middle Name</label>
                        <input type="text" class="form-control" id="middlename" name="middlename" value="<?php echo $row[3] ?>"  placeholder="<?php echo $row[3] ?>" >
                      </div>
                       <div class="form-group">
                        <label for="lastname">Middle Name</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $row[4] ?>"  placeholder="<?php echo $row[4] ?>" required>
                      </div>
                       <div class="form-group">
                        <label for="middlename">Email</label>
                        <input type="text" class="form-control" id="email" Readonly name="email" value="<?php echo $row[5] ?>"  placeholder="<?php echo $row[5] ?>" required>
                      </div>
                       <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" id="password"  name="password" value="<?php echo $row[8] ?>"  placeholder="<?php echo $row[5] ?>" required>
                      </div>

                      <div class="form-group">
                        <label for="major">Major</label>
                        <input type="text" class="form-control" id="major"  name="major" value="<?php echo $row[9] ?>" placeholder="<?php echo $row[5] ?>" required>
                      </div>
                         


                       <div class="form-group">
                        <label for="gender">Gender</label>
                        <input type="text" class="form-control" id="gender" name="gender" value="<?php echo $row[6] ?>" name="middlename" placeholder="<?php echo $row[6] ?>" required>
                      </div>
   
                     <button type="submit" class="btn btn-primary">Change Settings</button>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
         <div class="modal fade c_d" id="ModalD<?php echo $row[0]?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="ModalLabel">ARE YOU SURE U WANA DELETE THIS <?php echo $row[1]?></h4>
              </div>
              <!-- <div class="modal-body">
                <p>Our Body Delete</p>

              </div> -->
              <div class="modal-footer">
                <a type="button" href="?page=deleteStudent&name=<?php echo $row[1]?>" role="submit" class="btn btn-danger">Yes</a>
                <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
              </div>
            </div>
          </div>
        </div>
    <?php

     }

     ?>
     </tbody>
     </table>
     <?php


 ?>