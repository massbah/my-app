<?php 
require("../php/mass_connect.php");  
$offer=$_GET['couse_is'];
//echo $offer;

$query="select * from enrollment WHERE enrollment_id='$offer'";
$result=mysqli_query($connect,$query);
 ?>
<div class="form-group">
	<a href="?page=group_grade" class="btn btn-primary">Enter Grade for all</a>
	<a href="?page=grades" class="btn btn-primary"><span class="glyphicon glyphicon-chevron-left">Back</span></a>
</div>

 <table class="table table-hover">
 <thead>
 	<tr>
 		<th class="success">Full Name</th>
 		<th class="success">Course Code</th>	
 		<th class="success">Course Name</th>
 		<th class="success">Grade</th>
 		<th class="success">Update</th>
 	</tr>

 </thead>
  <?php
   //var_dump($result);
    
   while($row=mysqli_fetch_row($result)){
  
 ?>
   <tr>
   	 <td><?php echo $row[0]?></td>
   	 <td><?php echo $row[1] ?></td>
   	 <td><?php echo $row[2] ?></td>
   	 <td><?php echo $row[3] ?></td>
   	 <td><a  role="submit" class="btn btn-primary">Update</a></td>
   </tr>
 <?php
}

 ?>
 </table>