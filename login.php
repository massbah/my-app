<?php 
require_once "includes/header.php";
?>
  <div class="row">
  	 <div class="col-lg-8">
  	 	 <form class="form-horizontal" method="post" action="php/process_login.php">  
  	 	 	<div class="form-group" form-group>
  	 	 		<label for="username" class="col-sm-2 control-label">MatNumber</label>
  	 	 		<div class="col-sm-4">
  	 	 			<input type="text" name="username" id="username" placeholder="Username" class="form-control"/>	
  	 	 		</div>
  	 	 	</div>

  	 	 	<div class="form-group" form-group>
  	 	 		<label for="password" class="col-sm-2 control-label">Password</label>
  	 	 		<div class="col-sm-4">
  	 	 			<input type="password" name="password" id="password" placeholder="Password" class="form-control"/>	
  	 	 		</div>
  	 	 	</div>

  	 	  <label for="submit" class="col-sm-2 control-label">&nbsp</label>
  	 	  <button type="submit"  class="col-sm-2 btn btn-primary">Login</button>	
  	 	
  	 	 </form>
  	 </div>
  </div>

<?php
 require_once "includes/footer.php";
?>