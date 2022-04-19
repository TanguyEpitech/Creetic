<?php


class session {
    
    private $session_name;
    private $session_email;
    private $password;
    private $session_token;
    private $connected;
    
    
    public function __construct()
    {
        
        
        
    }
    
    public function connect($mail, $password) {
        $this->session_email = $mail;
        $this->session_password = $password;
        
        if(!empty($this->session_password) && !empty($this->session_email)) {
            $this->connected = "connecté";
            $_SESSION["name"] = $this->connected;
            
        }
        
    }
    public function get_connected() {
        
        return $this->connected;
        
    }
    
    public function logout() {
        
    }
}