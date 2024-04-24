<?php

    class login{
        public $username;
        public $password;

        public function login(){

            if(isset($_POST["login"])) {
                include("database.php");

                $this->username = $_POST["username"];
                $this->password = $_POST["password"];
                
                $sql = "SELECT * FROM credentials
                WHERE user='$this->username' AND password='$this->password'";

                $result = mysqli_query($conn, $sql);

                if(mysqli_fetch_all($result)) {
                    if($this->username || $this->password == !false) {
                        echo "login successful";
                    }
                }else {
                    echo"username/password is incorrect";
                }
            }
        }
    }
?>