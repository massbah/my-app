
<?php

// $t=new Course();
// $t->delete(222);

class Course{

	private $con;
	private static $max_number=6;

	public function __construct(){
		$this->con=new mysqli(LOCALHOST,USERNAME,PASSWORD,DBASE);
		if(mysqli_connect_errno()){
			die("You have trouble connecting to the dbase");
		}
	}
	
   
   public function getCourseMates($id){
  //  	  $query="select course.course_name,lect.firstname,lect.lastname,
		// course.course_credithour,enroll.id from enrollment as enroll INNER JOIN offering as offer ON 
		// enroll.enrollment_id=offer.offering_number
  //       INNER JOIN lecturers lect ON lect.lect_id=offer.lecturer_id INNER JOIN courses course 
  //       ON course.course_code=offer.course_code WHERE enroll.student_id='$id'";
   	     $myCourses="SELECT enrollment_id From enrollment WHERE student_id='$id'";
   	     $query=mysqli_query($this->con,$myCourses);
   	     //
        ?>
      
       <?php
              echo "<div class='col-lg-8'>";
              echo "<table class='table table-border table-hover'>";
						
					echo "<thead>";
					echo "<tr class='btn-info'>";
					echo "<th>Name</th>";
					echo "<th>Email</th>";
					echo "<th>Major</th>";
					echo "<th>Details</th>";
					echo "<tr>";
					echo "</thead>";
					echo "<tbody>";
   	     while($row=mysqli_fetch_row($query)){
                    $current_course=$row[0];
                	$mates="SELECT student_id,student.firstname,student.middlename,
                	student.lastname,student.email,student.major From 
                	enrollment as 
                	enroll INNER JOIN students 
                	as student ON student.matnumber=enroll.student_id 
                	WHERE enrollment_id='$row[0]' and student_id!='$id'";
                	$result=mysqli_query($this->con,$mates);
                	echo "<tr>";
                	echo "<td colspan='4' class='waw'>Web Programming</td>";
                	echo "</tr>";
                		//start
					while($c_mates=mysqli_fetch_row($result)){
						echo "<tr>";
						echo "<td>".ucfirst($c_mates[1])." ".ucfirst($c_mates[2])." ".ucfirst($c_mates[3])."</td>";
						echo "<td>$c_mates[4]</td>";
						echo "<td>$c_mates[5]</td>";
						echo "<td><button class='btn btn-info'><span class='glyphicon glyphicon-ok-circle'></span></button></td>";
						
					}

                		//end

   	        }
   	        	   echo "</tbody>";
						
					echo "</table>";
   	        echo "</div>";
   	        ?>
         
   	        <?php

}
	
	public function showMyCourse($id){
	
		$query="select course.course_code,course.course_name,lect.firstname,lect.lastname,
		course.course_credithour,enroll.id from enrollment as enroll INNER JOIN offering as offer ON 
		enroll.enrollment_id=offer.offering_number
        INNER JOIN lecturers lect ON lect.lect_id=offer.lecturer_id INNER JOIN courses course 
        ON course.course_code=offer.course_code WHERE enroll.student_id='$id'";

		$result=mysqli_query($this->con,$query);
		//$data=mysqli_fetch_array($result);
		echo "<div class='col-lg-8'>";
	    echo "<p class='btn-info select-course'>This Are Your List Of Courses</p>";
		echo "<table class='table table-border'>";
		echo "<thead>";
		echo "<tr class='btn-primary'>";
		echo "<th>Course Code</th>";
		echo "<th>Course Name</th>";
		echo "<th>Lecturer Name</th>";
		echo "<th>Action</th>";
		echo "<tr>";
		echo "</thead>";
		echo "<tbody>";
		while($row=mysqli_fetch_row($result)){
			echo "<tr>";
			echo "<td><a class='btn ' href='#'>$row[0]</a></td>";
			echo "<td><a class='btn ' href='#'>$row[1]</a></td>";
			echo "<td><a>".ucfirst($row[2])."-".ucfirst($row[3])."</a></td>";
			echo "<td>
			<form method='get' action='../tools/students_actions.php' class='deleteForm'>
			<input value='${row[5]}' type='hidden' name='drop' />
			<button class='btn btn-danger'><span class='glyphicon glyphicon-remove'></span></button>
			</form>
			</td>";
			echo "</tr>";
		}
		echo "</tbody>";
			
		echo "</table>";
		
		echo "</div>";
		
		 
	}

	 

	 public function delete($id)
	 {
      $query="DELETE FROM enrollment WHERE id='$id'";

      $result=mysqli_query($this->con,$query);

      if(!$result)
      {
            echo "Error,Cannot Remove Course From List";
      }
      else
      {
      	    echo "Successfully Remove Course From List";
      }

	}
	
	public function  showOffering(){
		$query="SELECT c.course_code,c.course_name,c.course_credithour,offer.offering_number ,lect.firstname,lect.lastname
		FROM offering as offer INNER JOIN courses as c ON offer.course_code=c.course_code
		INNER JOIN lecturers lect ON offer.lecturer_id=lect.lect_id";
		$result=mysqli_query($this->con,$query);
		echo "<div class='col-lg-8'>";
		echo "<table class='table table-border'>";
		echo "<thead>";
		echo "<tr class='btn-primary'>";
		echo "<th>Course Code</th>";
		echo "<th>Course Name</th>";
		echo "<th>Lecturer Name</th>";
		echo "<th>Action</th>";
		echo "<tr>";
		echo "</thead>";
		echo "<tbody>";
		while($row=mysqli_fetch_row($result)){
			echo "<tr>";
			echo "<td><a class='btn ' href='#'>$row[0]</a></td>";
			echo "<td>$row[1]</td>";
		
			echo "<td>".ucfirst($row[4])."-".ucfirst($row[5])."</td>";
			echo "<td>
			<form method='get' action='../tools/students_actions.php' class='stopForm'>
			  <input value='${row[3]}' type='hidden' name='add'/>
			  <button class='btn btn-primary'><span class='glyphicon glyphicon-ok'></span></button>
			</form>
			     </td>";
		}
		echo "</tbody>";
			
		echo "</table>";
		
		echo "</div>";
	}
	
	public function showAllCourse(){
		$query="SELECT * FROM courses";
		$result=mysqli_query($this->con,$query);
		$data=mysqli_fetch_array($result);
		echo "<div class='col-lg-8'>";
		echo "<table class='table table-border'>";
			
		echo "<thead>";
		echo "<tr>";
		echo "<th>Course Code</th>";
		echo "<th>Course Name</th>";
		echo "<th>Course CreditHour</th>";
		echo "<th>Action</th>";
		echo "<tr>";
		echo "</thead>";
		echo "<tbody>";
		while($row=mysqli_fetch_row($result)){
			echo "<tr>";
			echo "<td><a class='btn ' href='#'>$row[0]</a></td>";
			echo "<td>$row[1]</td>";
			echo "<td>$row[2]</td>";
			echo "<td>$row[4]</td>";
			echo "<td>
			          <a href='../tools/students_actions.php' role='button' class='btn btn-primary'>add</a>
			          <a href='../tools/students_actions.php' class='btn btn-danger' role='button'>Drop</a></td>";
			echo "</tr>";
		}
		echo "</tbody>";
			
		echo "</table>";

		echo "</div>";
		//var_dump($data);
		//return $data;

	}
	public function cpsOnly(){
			
	}
	public function insOnly(){
			
	}



}

?>
