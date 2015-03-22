<!DOCTYPE html>
 <html>
  <head>
   <title>Admin Login</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   <link rel="stylesheet" href="dist/css/bootstrap.min.css" type="text/css">
   <link rel="stylesheet" href="dist/css/bootstrap-theme.css" type="text/css">
   <link rel="stylesheet" href="css/style.css" type="text/css">
  </head>
  <body>

      <div class="container">
     <a href="index.php" class="btn btn-warning">Back</a>
      <form class="admin-login" method="post" action="php/process_admin.php" id="admin_login">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="username" class="sr-only">Username</label>
        <input type="text" id="username"  name="username" class="form-control" placeholder="Enter Username" required autofocus>
        <label for="password" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Secure Password" required>
       
         <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
       <div class="" id="result"></div>
      </form>
       

    </div>



    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
     <script type="text/javascript" src="dist/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="dist/js/npm.js"></script>
     <script type="text/javascript" src="js/js.js"></script>
  </body>

  </html>