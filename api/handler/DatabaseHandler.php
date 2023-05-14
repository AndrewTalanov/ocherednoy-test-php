<?php

    class DatabaseHandler {

        private $db;

        public function __construct($db)
        {
            $this->db = $db;
        }

        public function userExists($email) 
        {
            $smtp = $this->db->prepare("SELECT email FROM users WHERE email = ?");
            $smtp->execute([$email]);
            return $smtp->fetch(PDO::FETCH_ASSOC) !== false;
        }

        public function insertUser($user)
        {
            $smtp = $this->db->prepare("INSERT INTO users (email, name, password) VALUES (?, ?, ?)");
            $smtp->execute([$user->getEmail(), $user->getName(), $user->getPassword()]);
        }
    }

?>