<?php
    // interface declaration
    interface Software {
    
        // methods declaration
        public function login($email, $password);
        
        public function register($email, $password, $username);
        
        public function logout();
        
    }
    // class declaration
    class Registration implements Software {
    
        public function login($email, $password) {
            echo "Login the user with email: " . $email."\n";
        }
        
        public function register($email, $password, $username) {
            echo "User registered: Email=".$email." and Username=".$username. " and password : ".$password."\n";
            echo "Your Registration is successfull and you can Logout\n";
        }
        
        public function logout() {
            echo "User logged out!\n";
        }
        
    }
    //creating object of class Registration
    $user = new Registration();
    //calling the methods
    $user->login('nadeemshaikh1171998@gmail.com','Nadeem@123');
    $user->register('nadeemshaikh1171998@gmail.com','Nadeem@123','Nadeem');
    $user->logout();
?>