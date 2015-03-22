<?php 
require("mass_connect.php");
$courseID=$_GET['name'];
//echo $courseID;
$query="DELETE FROM students WHERE matnumber='$courseID'";

       $result=mysqli_query($connect,$query);

      if(!$result)
      {
            echo "Error,Cannot Remove Course From List<a href='?page=all_students'>View all Students</a>";
      }
      else
      {
      	    echo "Successfully Remove Course From List<a href='?page=all_students'>View all Students</a>";
      }
 ?>