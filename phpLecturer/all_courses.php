<?php 
session_start();
require("../php/mass_connect.php");  
  $id=$_SESSION['lect_id'];
    $encode=md5($id);
 $query="select o.startTime,o.endTime,o.venue,o.offering_number,c.course_name from lecturers as l INNER JOIN offering as o ON  l.lect_id=o.lecturer_id INNER JOIN courses as c ON c.course_code=o.course_code WHERE l.lect_id='$id'";
  $result=mysqli_query($connect,$query);
  $_SESSION['num_of_courses']=mysqli_num_rows($result);
  ?>

 <table class="table table-hover">
 <thead>
 	<tr>
 		<th class="success">Course Name</th>
 		<th class="success">Start Time</th>	
 		<th class="success">End Time</th>
 		<th class="success">Venue</th>
 		<th class="success">Action</th>
 	</tr>

 </thead>
  <?php
   //var_dump($result);
    
   while($row=mysqli_fetch_row($result)){
  
 ?>
   <tr>
   	 <td><?php echo $row[4]?></td>
   	 <td><?php echo $row[0] ?></td>
   	 <td><?php echo $row[1] ?></td>
   	 <td><?php echo $row[2] ?></td>
   	 <td><a href="?page=students_in_class&code=<?php echo $row[3]?>" role="submit" class="btn btn-primary">View Students</a></td>
   </tr>
 <?php
}

 ?>
 </table>