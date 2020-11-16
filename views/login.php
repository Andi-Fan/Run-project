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
            <h2>Run Buddy<br> Login Page</h2>
            <p>Login from here to access your metrics.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form action="index.php" method="get">
                  <div class="form-group">
                     <label>User Name</label>
                     <input type="text" class="form-control" placeholder="User Name" name="logUser">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" placeholder="Password" name="logPass">
                  </div>
                  <button type="submit" class="btn btn-black" name="login">Login</button>
                  <button type="submit" class="btn btn-secondary" name="registerpage">Register</button>
                  <button type="submit" class="btn btn-secondary" name="landing">Main</button>
               </form>
            </div>
         </div>
	  </div>
	  
</html>