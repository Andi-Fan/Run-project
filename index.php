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

    //$db = new Database();
    //$dbc = $db->connect();

    
    
    switch($_SESSION['state']){

      // the view we display by default
      case "landing":
        $views = file_get_contents("./views/landing.php");
      
        if (isset($_REQUEST['loginpage'])) {
          $_SESSION['state']='login';
          $views = file_get_contents("./views/login.php");
        }
        
        else if (isset($_REQUEST['registerpage'])) {
          $_SESSION['state']='register';
          $views = file_get_contents("./views/register.php");
        }
        echo $views;
        break;

      // load the page we view when logging in
      case "login":
        $views = file_get_contents("./views/login.php");

        if (isset($_REQUEST['landing'])) {
          $_SESSION['state']='landing';
          $views = file_get_contents("./views/landing.php");
        }

        if (isset($_REQUEST['registerpage'])) {
          $_SESSION['state']='register';
          $views = file_get_contents("./views/register.php");
        }

        if (isset($_REQUEST['login'])) {
          if (isset($_REQUEST['logUser']) && isset($_REQUEST['logPass'])){
            session_regenerate_id();
            $user = new User();
            //login returns true if user is validated and false otherwise
            $status = $user->login($_REQUEST['logUser'], $_REQUEST['logPass']);
            
            if ($status){
              //add webtoken here
              $_SESSION['state']='dashboard';
              $views = $views = file_get_contents("./views/dashboard.php");
            }
          } 
        }
        
        echo $views;
        break;


      // load page we view when registering a new account
      case "register":
        $views = file_get_contents("./views/register.php");
    
        if (isset($_REQUEST['landing'])) {
          $_SESSION['state']='landing';
          $views = file_get_contents("./views/landing.php");
        }

        if (isset($_REQUEST['loginpage'])) {
          $_SESSION['state']='login';
          $views = file_get_contents("./views/login.php");
        }

        if (isset($_REQUEST['register'])) {
          if (isset($_REQUEST['regUser']) && isset($_REQUEST['regPass']) && isset($_REQUEST['regMail'])){
            $reg_user = new User();
            $reg_user->register($_REQUEST['regUser'], $_REQUEST['regPass'], $_REQUEST['regMail']);
          } 
        }


        echo $views;
        break;


        case "dashboard":
          $views = file_get_contents("./views/dashboard.php");
        
          if (isset($_REQUEST['logout'])) {
            session_destroy();
            $views = file_get_contents("./views/landing.php");
          }
          
          echo $views;
          break;
      }
?>