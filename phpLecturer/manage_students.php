<?php 
session_start();
require("../php/mass_connect.php");  
  $id=$_SESSION['lect_id'];
 $query="select o.offering_number,c.course_name from lecturers as l INNER JOIN offering as o ON  l.lect_id=o.lecturer_id INNER JOIN courses as c ON c.course_code=o.course_code WHERE l.lect_id='$id'";
  $result=mysqli_query($connect,$query);
  ?>

 <table class="table table-hover">
 <thead>
 	<tr>

 		<th class="success">Course Name</th>
 		<th class="success">Action</th>
 	</tr>

 </thead>
  <?php
   //var_dump($result);
    
   while($row=mysqli_fetch_row($result)){
  
 ?>
   <tr>

   	 
   	 <td><?php echo $row[1] ?></td>
   	 <td><a href="?page=manage_student_edit&course_code=<?php echo $row[0]?>" role="submit" class="btn btn-primary">Manage students</a></td>
   </tr>
 <?php
}

 ?>
 </table>