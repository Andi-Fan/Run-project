<?php
    class User{
        //DB STUFF
        private $conn;

        //User Properties
        public $username;
        public $email;
        public $password;

        public function __construct($db, $username, $password, $email){
            $this->conn = $db;
            $this->username = $username;
            $this->password = $password;
            $this->email = $email;
        }

        //Validate User
        public function validate(){
            $query = 'select username from Accounts where username=? and password=?';

            //prepare the query 
            $result = $this->conn->prepare($query);

            $result->execute([$this->username, $this->password]);

            return $result;
        }
    }

?>