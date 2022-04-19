<?php
include "db/pdo_connect.php";
include "../db/pdo_connect.php";

class appController {
    
    
    private $name;
    private $surname;
    private $email;
    private $loisir;
    private $birth;
    

    
    



    public function set() {
        if (isset($_POST["name"])) {
            $this->name = $_POST["name"];
        }
        if (isset($_POST["surname"])) {
            $this->surname = $_POST["surname"];
        }
        
        if (isset($_POST["select"])) {
            $this->loisir = $_POST["select"];
        }
    }
    
    public function search () {
        $requetas = new DB();
        if (isset($_POST["req"])) {
            $user = $requetas->get_all("SELECT * from user where nom like '%$this->surname%'");
        }

        if (isset($_POST["req1"])) {
            $user = $requetas->get_all("SELECT * from user where nom like '%$this->firstname%'");
        }
        if (isset($_POST["req2"])) {
            $user = $requetas->get_all("SELECT * from loisir where nom like '%$this->firstname%'");
        }



      if(!empty($user))  {
        foreach ($user as $val) {


            $dateNaissance = $val["date_naissance"];
            $aujourdhui = date("Y-m-d");
            $diff = date_diff(date_create($dateNaissance), date_create($aujourdhui));

            echo '<div class="item_slider" >';
            echo '<div class="image"> <img class="rounded" style="width: 268px;margin-top: -177px;margin-bottom: 58px;" src="assets/manprofil.jpg"></div><br>';
            echo "<div id='city'>  Lives in ".$val["ville"]."</div> ";

            echo  "<div id='info' style='display :flex'> 

            <div id='name'>".$val["prenom"]."</div>";
            echo  "<div id='prenom'>".$val["nom"]."</div></div> <br>";
            echo  "<div id='info' style='display :flex'>";
            echo "<div id='gender'>".$val["genre"]."</div>";
            echo "<div id='date'>".$diff->format('%y')." ans</div> <br> ";


            echo "</div></div>";
        }
    }
    else {
        echo "aucun résultat";
    }

    }   
    
}

$app_exe = new appController();

    // $app_exe->get_sport();  
$app_exe->set();


    if(isset($_POST["req"])) {


     $app_exe->search();
    
    }
    
    
    if(isset($_POST["req2"]) == true) {
        $app_exe->search();

    }


?>