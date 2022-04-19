<?php 

include "../db/pdo_connect.php";
include '../session/session.php';
include "../utils/hash.php";

class loginController  {  
    
    private $email;
    private $password;
    private $data = [];
    public function login($mail) {
        
        $this->email = $mail;
        
        $this->password = password_hash($_POST["password"], PASSWORD_DEFAULT);            
        
        // $session_user = new session('view/app', $this->email, $this->password);
        
    }
    public function get_email() {
        return $this->email;
    }
    
    public function get_password() {
        return $this->password;
    }
    
    
    public function check_credential() {
        $login_db = new DB();
        if(isset($this->email)) {
            
            $login_db->exist($this->email);
            return  $login_db->get_user();
            
        } 
    }
    
    
    public function get_data() {
        return $this->data;
    }
    
}



$login = new loginController();
if (isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["password"]) && !empty($_POST["password"]))
{
    $login->login($_POST["email"]);
    
    $user_cred =  $login->check_credential();

    
    $verif = new hash($_POST["password"],$user_cred[0]["mot_de_passe"]);
    
    
    if(!empty($verif->get_valid())) {
        session_start();
        $_SESSION["current_id"] = $user_cred[0]["id"];
        echo "bienvenue";
        
    }   else {
        echo "votre Login / password ne correspond pas";
    }     
    
}
else {
    echo "Champs manquants";
}
?>