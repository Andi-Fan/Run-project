<?php
    ini_set('display_errors', 'On');
    require_once "./models/db.php";
    require_once "./models/users.php";

    session_save_path("sess");
    session_start(); 
    $view="";

    if(!isset($_SESSION['state'])){
		$_SESSION['state']='landing';
    }
    
    switch($_SESSION['state']){


      case "landing":
        // the view we display by default
        $views="landing.php";
        

        break;

      case "login":
        // load the page we view when logging in
        $views="landing.php";
          

        break;

        case "register":
          // load page we view when registering a new account
          $views="landing.php";
            
  
          break;
      }
	require_once "views/$views";
?>