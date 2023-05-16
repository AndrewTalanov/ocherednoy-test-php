<?php 
    require_once '../config/bd.php';

    class LoginController {

        private $db;

        public function __construct()
        {
            $this->db = Database::getInstance()->getConnection();
        }

        public function loginUser()
        {

            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            $password = trim($_POST['password']);

            $smtp = $this->db->prepare("SELECT * FROM users WHERE email = ?");
            $smtp->execute([$email]);
            
            $user = $smtp->fetch(PDO::FETCH_ASSOC);

            $isPassword = password_verify($password, $user['password']);
           
            if ($isPassword) {
                
                $_SESSION['auth'] = true;
                $_SESSION['user'] = $user;
                
                $token = bin2hex(random_bytes(32));
                $_SESSION['csrf_token'] = $token;

                return $_SESSION['csrf_token'];
            } else {
                return 'no';
            }
        }
    }

?>