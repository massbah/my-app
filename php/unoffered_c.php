<h1>Unoffered Courses</h1>
<?php 
require("mass_connect.php");
 $query="SELECT * FROM courses AS U WHERE NOT  EXISTS(SELECT * FROM offering AS T WHERE T.course_code = U.course_code);";
 $result=mysqli_query($connect,$query);
    ?>

     <table class="table table-hover table-bordered">
       <thead>
       	
       	<tr>
       		<th>Code</th>
       		<th>Name</th>
       		<th>Hour</th>
       		<th>Desc</th>
       		<th>Edit</th>
       		<th>Delete</th>

       	</tr>
       </thead>
       <tbody>
    <?php
  while($row=mysqli_fetch_row($result)){
    ?>
		 <tr>
		  <td class="active"><?php echo $row[0]?></td>
		  <td class="success"><?php echo $row[1]?></td>
		  <td class="warning"><?php echo $row[2]?></td>
		  <td class="danger"><?php echo $row[3]?></td>
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
                <form method="post" action="?page=update_course" id="admin_update_form">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Course Code</label>
                        <input type="text" class="form-control" name="code" id="code" value="<?php echo $row[0] ?>"placeholder="<?php echo $row[0] ?>" Readonly required>
                      </div>
                      <div class="form-group">
                        <label for="firstname">Course Name</label>
                        <input type="text" class="form-control" id="c_name" name="c_name" value="<?php echo $row[1] ?>" placeholder="<?php echo $row[1] ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="middlename">Credit Hour</label>
                        <input type="number" class="form-control" id="crdhour" name="crdhour" value="<?php echo $row[2] ?>"  placeholder="<?php echo $row[2] ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="middlename">Descption</label>
                         <textarea class="form-control" rows="3" name="desc" id="desc">
                            <?php echo $row[3] ?>

                         </textarea>
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
                <h4 class="modal-title" id="ModalLabel">ARE YOU SURE U WANA DELETE THIS <?php echo $row[0]?></h4>
              </div>
              <!-- <div class="modal-body">
                <p>Our Body Delete</p>

              </div> -->
              <div class="modal-footer">
                <a type="button" href="?page=deleteCourse&name=<?php echo $row[0]?>" role="submit" class="btn btn-danger">Yes</a>
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