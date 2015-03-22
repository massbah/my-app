<?php 
session_start();

		require("../php/mass_connect.php");  
		  $id=$_SESSION['lect_id'];
 ?>
        <div class="modal-body">
		<center><h3>Click on Your course and add grades</h3></center>
		<?php 

		  $query="select o.startTime,o.endTime,o.venue,o.offering_number,c.course_name from lecturers as l INNER JOIN offering as o ON  l.lect_id=o.lecturer_id INNER JOIN courses as c ON c.course_code=o.course_code WHERE l.lect_id='$id'";
		  $result=mysqli_query($connect,$query);
		  ?>
		 <table class="table table-hover">
		 <thead>
		 	<tr>
		 		<th class="success">Course Name</th>
		 		<th class="success">Grades</th>	
		 	</tr>

		 </thead>
		  <?php
		   //var_dump($result);
		    
		   while($row=mysqli_fetch_row($result)){
		  
		 ?>
		   <tr >
		   	 <td class="lead text-capitalize"><a  href="?page=grades_enter&couse_is=<?php echo $row[3]?>" ><?php echo $row[4]?> </a>
		   	 </td>

		   	<td >
		   	<a  href="?page=grades_enter&couse_is=<?php echo $row[3]?>" value="<?php echo $row[3]?>"  name="<?php echo $row[3]?>" class="btn btn-default">
		   	       <span class="glyphicon glyphicon-plus">	
		   	       </span>
		   	</a>
		     </td>
		   </tr>

		 <?php
		}

		 ?>
		 </table>
	    </div>











