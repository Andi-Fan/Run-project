<?php
// So I don't have to deal with unset $_REQUEST['user'] when refilling the form
// You can also take a look at the new ?? operator in PHP7

$_REQUEST['user']=!empty($_REQUEST['user']) ? $_REQUEST['user'] : '';
$_REQUEST['password']=!empty($_REQUEST['password']) ? $_REQUEST['password'] : '';
?>

<html lang="en">

<link href="./css/bootstrap.min.css" rel="stylesheet">
<link href="./css/login.css" rel="stylesheet">

<!------ Include the above in your HEAD tag ---------->

<div class="sidenav">
         <div class="login-main-text">
            <h2>Run<br>Buddy</h2>
            <p>Register to start tracking your progress</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form action="index.php" method="get">
                  <div class="form-group">
                     <label>User Name</label>
                     <input type="text" class="form-control" placeholder="User Name" name="regUser">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" placeholder="Password" name="regPass">
                  </div>
                  <div class="form-group">
                     <label>Email</label>
                     <input type="text" class="form-control" placeholder="Email" name="regMail">
                  </div>
				  <button type="submit" class="btn btn-secondary" name="register">Register</button>
                  <button type="submit" class="btn btn-secondary" name="landing">Main</button>
                  <button type="submit" class="btn btn-secondary" name="loginpage">Login</button>
               </form>
            </div>
         </div>
	  </div>
	  
</html>