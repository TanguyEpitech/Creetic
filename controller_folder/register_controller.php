<?php 

include 'controller.php';
include "../db/pdo_connect.php";
include '../session/session.php';
include "../utils/hash.php";

class registerController  {  
    
    private $req_obj;
    private $name;
    private $surname;
    private $email;
    private $birth;
    private $gender;
    private  $valid = "";
    private $id;
    public function database() {
        if(isset($_POST["email"]) && !empty($_POST["email"])) {
            $this->email = $_POST["email"];
            
        }  
        if(isset($_POST["password"]) && !empty($_POST["password"])) {
            $this->password = password_hash($_POST["password"], PASSWORD_DEFAULT);            
            
        }  
        if(isset($_POST["name"]) && !empty($_POST["name"])) {
            $this->name = $_POST["name"];
            
        }  
        if(isset($_POST["surname"]) && !empty($_POST["surname"])) {
            $this->surname = $_POST["surname"];
            
        }       
        if(isset($_POST["birth"]) && !empty($_POST["birth"])) {
            $this->birth = $_POST["birth"];
            
        }  
        if(isset($_POST["city"]) && !empty($_POST["city"])) {
            $this->city = $_POST["city"];
            
        }  
        if(isset($_POST["gender"]) && !empty($_POST["gender"])) {
            $this->gender = $_POST["gender"];
            
        }    
        
        
    }
    
    public function get_email() {
        return $this->email;
    }
    
    public function get_password() {
        return $this->password;
    }

public function set_id() {

$get_id = new DB();
$creds =$get_id->get_all("SELECT * FROM user where email like '$this->email'");

$this->id = $creds[0]["id"];

}
    public function get_id() {
        return $this->id;
    }

    public function create() {
        
        
        $db_check = new DB();
        
        if(!empty($this->email)) {
            $result[] = $db_check->get("SELECT * from user where email like '$this->email'");
            foreach($result as $value) {
                if(!empty($value)){
                    
                    return $this->valid = "exist";
                }
            }
            
        } 
        $cc = $this->valid;
        if ($cc === "") {
            $db_create = new DB();
            $req ="INSERT INTO user(email,ville,mot_de_passe,nom,prenom,date_naissance,genre) VALUES('$this->email', '$this->city','$this->password','$this->surname','$this->name','$this->birth','$this->gender')";
            // $req ="INSERT INTO user(email,ville,) VALUES('$this->email', '$this->city')";
            
            
            $db_create->insert($req);
            
            // instancier new user;
        } else {
            echo "Votre email est déjà utilisé";
        }
        
    }
    
    public function update($req) {
        new DB($req);
        
    }
    public function delete($req) {
        new DB($req);
        
    }
    
}





// execution
$session = new session();

$register = new registerController();

if (isset($_POST)) {
    
    if (!empty($_POST["email"]) && !empty($_POST["password"]) && !empty($_POST["name"]) && !empty($_POST["surname"]) && !empty($_POST["birth"]) && !empty($_POST["city"])  && !empty($_POST["gender"])) {   
        $register->database();
        $exist = $register->create();
        
        $mail = $register->get_email();
        $pass = $register->get_password();
        

        if ($exist != "exist") {
            $register->set_id();
            session_start();
    $_SESSION["current_id"] = $register->get_id();


            $session->connect($mail, $pass);
            if ($_SESSION["name"] == "connecté") {
echo 'connecté';
            }
        }
        else { echo "votre mail est déjà utilisé";
        }
    } else {
        echo "Champ manquants";
    }    /* Redirection du navigateur */
}

?>