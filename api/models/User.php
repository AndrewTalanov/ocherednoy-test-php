<?php
    class User {

        private $id;
        private $email;
        private $name;
        private $password;

        public function __construct($id, $email, $name, $password) {
            $this->id = $id;
            $this->email = $email;
            $this->name = $name;
            $this->password = $password;
        }

        public function getId() {
            return $this->id;
        }
        public function getEmail() {
            return $this->email;
        }
        public function getName() {
            return $this->name;
        }
        public function getPassword() {
            return $this->password;
        }

        public function setEmail($email) {
            $this->email = $email;
        }
        public function setName($name) {
            $this->name = $name;
        }
        public function setPassword($password) {
            $this->password = $password;
        }

        public function toArray() {
            return [
                'id' => $this->id,
                'email' => $this->email,
                'name' => $this->name,
                'password' => $this->password
            ];
        }
    }
?>