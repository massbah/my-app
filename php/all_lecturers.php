<center><h4>all Lecturers</h4></center>
<?php 
require("mass_connect.php");
 $query="SELECT * FROM lecturers ORDER BY firstname";
 $result=mysqli_query($connect,$query);
    ?>

     <table class="table table-hover table-bordered">
       <thead>
       	
       	<tr>
       		<th>Lect-ID</th>
       		<th>Full Name</th>
       		<th>Email</th>
       		<th>Age</th>
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
		  <td><a href=""><span class="btn btn-primary glyphicon glyphicon-edit"></span></a></td>
		  <td><a href=""><span class="btn btn-danger glyphicon glyphicon-remove"></span></a></td>
		</tr>
    <?php

     }

     ?>
     </tbody>
     </table>
     <?php


 ?>