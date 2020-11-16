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
            $query = 'select username from Account where username=? and password=?;';

            //prepare the query 
            $result = $this->conn->prepare($query);

            $result->execute(array($username, $password));
            $row = $result->fetch();
            if (!$row){
                return false;
            }
            return true; 
        }

        public function register($username, $password, $email){
            $query = 'insert into Account (username, password, email) Values(?, ?, ?);';

            //prepare the query 
            $result = $this->conn->prepare($query);
            $result->execute([$username, $password, $email]);

            return $result;
        }
    }

?>