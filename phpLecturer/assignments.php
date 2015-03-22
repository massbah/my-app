<?php 
session_start();

		require("../php/mass_connect.php");  
		  $id=$_SESSION['lect_id'];
 ?>
        <div class="modal-body">
		<center><h3>Select The Course You want to Upload into:</h3></center>
		<?php 

		  $query="select o.startTime,o.endTime,o.venue,o.offering_number,c.course_name from lecturers as l INNER JOIN offering as o ON  l.lect_id=o.lecturer_id INNER JOIN courses as c ON c.course_code=o.course_code WHERE l.lect_id='$id'";
		  $result=mysqli_query($connect,$query);
		  ?>
		 <table class="table table-hover">
		 <thead>
		 	<tr>
		 		<th class="success">Course Name</th>
		 		<th class="success">Upload</th>	
		 	</tr>

		 </thead>
		  <?php
		   //var_dump($result);
		    
		   while($row=mysqli_fetch_row($result)){
		  
		 ?>
		   <tr class="info">
		   	 <td class="lead text-capitalize"><?php echo $row[4]?></td>
		   	<td >
		   	<a data-toggle="modal" data-target="#new-assignment<?php echo $row[3]?>" 
		   	       value="<?php echo $row[3]?>"  name="<?php echo $row[3]?>" class="btn btn-primary">
		   	       <span class="glyphicon glyphicon-upload">	
		   	       </span>
		   	</a>
		     </td>
		   </tr>
<div class="modal fade" id="new-assignment<?php echo $row[3]?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Assignment for :<?php echo $row[4]?></h4>
      </div>
        <div class="modal-body">

        <div class="form-group">
          <div class="form-group">
          	<form method="post" action="handlefile.php" enctype="multipart/form-data" class="uploading-file">
				<div class="form-group">
				<label for="exampleInputFile">File input</label>
				
				<input name="uploadfile" type="file">
				</div>
				<button type="submit" class="btn btn-primary" >Upload</button>
			</form>
             </div>
				<div class="progress">
				  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0">
				    <span class="sr-only progress-status"></span>
				  </div>
				</div>
				<div class="myfile">
					
				</div>
          </div>

         </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

		 <?php
		}

		 ?>
		 </table>
	    </div>











