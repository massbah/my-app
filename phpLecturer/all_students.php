<?php 
session_start();
require("../php/mass_connect.php");  
  $id=$_SESSION['lect_id'];
  

 $query="select student_id,s.firstname,s.middlename,s.lastname,c.course_name from enrollment as e INNER JOIN
offering as o ON e.enrollment_id=o.offering_number INNER JOIN students as s ON e.student_id=s.matnumber INNER JOIN courses 
as c ON c.course_code=o.course_code WHERE o.lecturer_id='$id' GROUP BY e.student_id";
   $result=mysqli_query($connect,$query);

 $total=mysqli_num_rows($result);
 $_SESSION['num_of_courses']=$total;
      $how_many_course_am_doing_with_you="select s.firstname,s.middlename,s.lastname,c.course_name from enrollment as e INNER JOIN
offering as o ON e.enrollment_id=o.offering_number INNER JOIN students as s ON e.student_id=s.matnumber INNER JOIN courses 
as c ON c.course_code=o.course_code WHERE o.lecturer_id='10001' AND  e.student_id='2130001'";

         $find_out=mysqli_query($connect,$how_many_course_am_doing_with_you);


  ?>

 <table class="table table-hover">
 <thead>
 	<tr>
 		<th class="success">Mat #</th>
 		<th class="success">Name</th>
 		<th class="success">Test 1</th>
 		<th class="success">Test 2</th>
 		<th class="success">Action</th>
 	</tr>

 </thead>
  <?php
   //var_dump($result);
    
   while($row=mysqli_fetch_row($result)){

   	      $how_many_course_am_doing_with_you="select s.firstname,s.middlename,s.lastname,c.course_name from enrollment as e INNER JOIN
offering as o ON e.enrollment_id=o.offering_number INNER JOIN students as s ON e.student_id=s.matnumber INNER JOIN courses 
as c ON c.course_code=o.course_code WHERE o.lecturer_id='$id' AND  e.student_id='$row[0]'";

         $find_out=mysqli_query($connect,$how_many_course_am_doing_with_you);
  
 ?>
   <tr>
   	 
   	 <td><?php echo $row[0] ?></td>
   	 <td><?php echo $row[1]." ".$row[2]." ".$row[3]?></td>
   	 <td><?php echo 20 ?></td>
   	 <td><?php echo 45 ?></td>
   	 <td><a data-toggle="modal" data-target="#modal<?php echo $row[0]?>" href="#" role="submit" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></a></td>
   </tr>
   <div class="modal fade" id="modal<?php echo $row[0] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $row[0]." 's Information"?></h4>
      </div>
      <div class="modal-body">
        <?php 
        echo "This are my  courses with you:<br/>";
         while($course=mysqli_fetch_row($find_out)){
            echo "<a href='btn-primary'>$course[3]</a>"."<br/>";
         }
         ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
 <?php
}

 ?>
 </table>

 <?php 
     $query="select student_id,s.firstname,s.middlename,s.lastname,c.course_name from enrollment as e INNER JOIN
offering as o ON e.enrollment_id=o.offering_number INNER JOIN students as s ON e.student_id=s.matnumber INNER JOIN courses 
as c ON c.course_code=o.course_code WHERE o.lecturer_id='$id' AND  e.student_id='2130001'";
         $result=mysqli_query($connect,$query);
         //var_dump($result);
         //exit();
  ?>