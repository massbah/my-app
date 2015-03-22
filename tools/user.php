<?php
session_start();
 //require "config/configuration.php";

//$user=new User();
//var_dump($user);


class User{
	private $con;
	private $id;
	private $username;
	private $firstname;
	private $lastname;
	private $matnumber;
	private $password;
	private $email;
	private $middlenames;
	private $gender;
	private $active;
	private $joinDate;
	private $major;	
	
	
	
	
	
	public function __construct(){
		$this->con=new mysqli(LOCALHOST,USERNAME,PASSWORD,DBASE);
		$this->username="unknown_username";
		$this->firstname="unknown_firstname";
		$this->lastname="unknown_lastname";
		$this->matnumber=1;
		$this->password="not_set_password";
		$this->email="unknown_email";
		$this->middlenames="unknown_middlenames";
		$this->gender="unknown_gender";
		$this->active=0;
		if(mysqli_errno()){
			die("You cannot connect");
		}
	}
	
	
	
	public function getNumberOfCourses($id){
		
		$query="SELECT * FROM enrollment WHERE student_id='$id'";
		$result=mysqli_query($this->con,$query);
		
		return $result->num_rows;
	}
	
	public function isCourseInList($code){
		$mat=$this->getMatNumber();
		$query="SELECT enrollment_id FROM enrollment WHERE student_id='$mat' AND enrollment_id='$code'";
		$result=mysqli_query($this->con,$query);
		if(!$result){
			die("connection error");
		}
		else
		{
			if($result->num_rows >= 1){
			
				return true;
			}
			else
			{
				
				return false;
			}
			
		}
	}
	
	
	public function addCourse($offer_id){
		$mat=$this->getMatNumber();
		$query="INSERT INTO enrollment (student_id,enrollment_id,score)  
		VALUES ('$mat','$offer_id',0)";
		$result=mysqli_query($this->con,$query);
		if(!$result){
			die("Problem");
		}
	
	}
	
	public function getDate(){
	  return date("d/m/Y");	
	}
	public function setMajor($major){
		$this->major=$major;
	}
	public function getMajor(){
		return $this->major;
	}
	
	public function setEmail($email){
		$this->email=$email;
	}
	public function getEmail(){
		return $this->email;
	}
	public function setMatNumber($num){
		$this->matnumber=$num;
	}
	public function getMatNumber(){
		return $this->matnumber;
	}
	
	public function setId($id){
		$this->id=$id;
	}
	public function getId(){
		return $this->id;
	}
	
	public function setUserName($username="unknown_username"){
		$this->username=$username;
	}
	public function getUserName(){
		return $this->username;
	}
	public function setFirstName($firstname="unknown_username"){
		$this->firstname=$firstname;
	}
	public function getFirstName(){
		return $this->firstname;
	}
	public function setMiddleName($param="unknown_middlename"){
		$this->middlenames=$param;
	}
	public function getMiddleName(){
		return $this->middlenames;
	}
	public function setLastName($param="unknown_lastname"){
	  return $this->lastname=$param;
	}
	public function getLastName(){
		return $this->lastname;
	}
	public function setGender($param="unknown_gender"){
		$this->gender=$param;
	}
	public function getGender(){
		return $this->gender;
	}
	public function setPassword($param="unknown_password"){
		$this->password=$param;
	}
	public function geMiddleName(){
		return $this->password;
	}
	public function activate($value){
	 $this->active=$value;
	}
	
	public  function checkIfUserExist($matnumber){
		//echo "Hello,world";
 		 $query="SELECT * FROM students WHERE matnumber='$matnumber'";
 		 $result=mysqli_query($this->con,$query);
 		 $num_exist=mysqli_num_rows($result);
		 if($num_exist >=1){
		 	return true;
		 }
		 return false;
		
		// echo"Good bye";
	}
	
	public function getInformationAboutMe($matnumber){
		$query="SELECT * FROM students WHERE matnumber='$matnumber'";
		$result=mysqli_query($this->con,$query);
		echo "<div class='col-lg-8'>";
		echo "<table class='table table-border'>";
		echo "<thead>";
		echo "<tr class='btn-primary'>";
		echo "<th>Full Name</th>";
		echo "<th>Mat Number</th>";
		echo "<th>Email</th>";
		echo "<th>Major</th>";
		echo "<th>Join Date</th>";
		echo "<th>Action</th>";
		echo "<tr>";
		echo "</thead>";
		echo "<tbody>";
		 while($c_mates=mysqli_fetch_row($result)){
						echo "<tr>";
						echo "<td>".ucfirst($c_mates[2])."".ucfirst($c_mates[3])."".ucfirst($c_mates[4])."</td>";
						echo "<td>$c_mates[1]</td>";
						echo "<td>$c_mates[5]</td>";
						echo "<td>$c_mates[9]</td>";
						echo "<td>$c_mates[10]</td>";
						echo "<td><button class='s btn btn-warning' data-toggle='modal' data-target='myModal$c_mates[1]'><span class='glyphicon glyphicon-pencil'></span></button></td>";
						?>
                          <div class="modal fade modal1" id="myModal<?php echo $c_mates[1]?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							  <div class="modal-dialog">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title" id="myModalLabel"><?php echo $c_mates[1]?></h4>
							      </div>
							      <div class="modal-body">
							               <form>
												  <div class="form-group">
												    <label for="exampleInputEmail1">First Name</label>
												    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="<?php echo $c_mates[2]?>">
												  </div>
												  <div class="form-group">
												    <label for="exampleInputPassword1">Middle Name</label>
												    <input type="password" class="form-control" id="exampleInputPassword1"  placeholder="<?php echo $c_mates[3]?>">
												  </div>
												  <div class="form-group">
												    <label for="exampleInputEmail1">Last Name</label>
												    <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="<?php echo $c_mates[4]?>">
												  </div>
												  <div class="form-group">
												    <label for="exampleInputPassword1">Email</label>
												    <input type="password" class="form-control" id="exampleInputPassword1"  placeholder="<?php echo $c_mates[5]?>">
												  </div>

												  <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Save all Your Changes">Save Changes</button>
										</form>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
							        
							      </div>
							    </div>
							  </div>
                        </div>

						<?php
						
					}
	  echo "</tbody>";
			
		echo "</table>";
		echo "</div>";
	}
	
	
	public function register($num,$firstname,$middlename,$lastname,$gender,$email,$password,$major){
		
		//$this->setId($id);
		$this->setMatNumber($num);
		$this->setFirstName($firstname);
		$this->setMiddleName($middlename);
		$this->setLastName($lastname);
		$this->setGender($gender);
		$this->setEmail($email);
		$this->setPassword($password);
		$this->setMajor($major);
		$today_date=$this->getDate();
		$activate=1;	
		$mat= $this->getMatNumber();
		$fname=$this->getFirstName();
		$mname=$this->getMiddleName();
		$lname=$this->getLastName();
		$gender=$this->getGender();
		$email=$this->getEmail();
		$password=$this->getPassword();
		$major=$this->getMajor();
		//echo "Mat is ".$mat."<br>";
		//echo "Fname is ".$fname."<br>";
		//echo "MName is ".$mname."<br>";
		//echo "lastname is ".$lname."<br>";
		//echo "gender is ".$gender."<br>";
		//echo "email is ".$email."<br>";
		 
		if(!$this->checkIfUserExist($mat)){
			//start
			$query="INSERT INTO students (matnumber,firstname,middlename,lastname,email,gender,password,active,major,joinDate)
			VALUES ('$mat','$fname','$mname','$lname','$email','$gender','$password','$activate','$major','$today_date')";
			$result=mysqli_query($this->con,$query);
			if(!$result){
				die("You have some issues");
			}
			else
			{
				echo "Registeration Successful.Data Inserted..Please confirm";
			}
			
			//end
		}
		else{
			echo "This Mat Number is already Register in our system";
		}
		
	}
	public function getPassword(){
		return $this->password;
	}
	
	public  function logout(){
		$_SESSION['login']=false;
		session_destroy();
		header("location:../index.php");
	}
	
	
	
	public function login($username,$password)
	{
		
		 $query="SELECT * FROM students WHERE matnumber='$username' and password='$password'";
		 $result=mysqli_query($this->con,$query);
		 $rows_found=$result->num_rows;
		 
		  if($rows_found===1){
		  	echo "You are successfully login";
		  	$_SESSION['login']=true;
		  	$_SESSION['id']=md5($this->getMatNumber());
		  	$_SESSION['id_num']=$this->getMatNumber();
		  	//Massay,check this line of code okay..hahah am taking to my self.
		  	//I am Massay Lol
		  	//Please check okay
		  	header("location: successlogin.php");
		  }
		  else
		  {
		  	echo "You are not logged in";
		  }
		 //echo $rows_found;
// 		 while($row=mysqli_fetch_row($result)){
// 		 	echo $row[0];
// 		 	echo $row[1]."<br/>";
// 		 }		 
		
	}
	

	
	
}