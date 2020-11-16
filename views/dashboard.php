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
            <h2>Dashboard<br> Test Page</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti tenetur corrupti voluptatem voluptatum in commodi nihil repellendus numquam sit tempore?.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form action="index.php" method="get">
                  <button type="submit" class="btn btn-secondary" name="logout">Logout</button>
               </form>
            </div>
         </div>
	  </div>
	  
</html>