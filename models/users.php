<?php
    class User{
        //DB STUFF
        private $conn;

        //User Properties
        public $username;
        public $email;
        public $password;

        public function __construct(){
            $db = new Database();
            $this->conn = $db->connect();

        }

        //Validate User
        public function login($username, $password){
            $query = 'select password from Account where username=?;';
          
            //prepare the query 
            $result = $this->conn->prepare($query);

            $result->execute(array($username));
            

            $row = $result->fetch(PDO::FETCH_ASSOC);
            if (!$row){
                return false;
            }
            $hash = $row['password'];
            if (password_verify($password, $hash)){
                return true;
            }
            return false; 
            
            
            
        }

        public function register($username, $password, $email){
            $query = 'insert into Account (username, password, email) Values(?, ?, ?);';

            //prepare the query 
            $result = $this->conn->prepare($query);

            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $result->execute([$username, $hashed_password, $email]);

            return $result;
        }
    }

?>