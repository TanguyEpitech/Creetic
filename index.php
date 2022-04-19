<?php
ob_start();



// code PHP
session_start();
include "session/session.php";
include "utils/hash.php";
if(isset($_SESSION["name"]) === "connecté") {
    
}

else {
    
}

$timestamp = time();
// include "db/pdo_connect.php";

$page = 'welcome';
if (isset($_GET['p'])) {
    
    $page = $_GET['p'];
    
}


if($page === "welcome") {
    if($_SESSION["name"]=== "connecté") {
        header('Location: ?p=app');
        
    } else {
        require "controller_folder/welcome_controller.php";
        $welcome = new welcomeController("welcome");
        
    }
    
}



if($page === "") {
    require "controller_folder/welcome_controller.php";
    $welcome = new welcomeController("welcome");
    
}


// page 1


if ($page ==="login") { 
    if(isset($_SESSION) && !empty($_SESSION)) {
        header('Location: ?p=app');
        
    }
    
    require "controller_folder/controller.php";
    $view = new Controller("connexion");
    
    
}

if ($page ==="register") { 
    if(isset($_SESSION) && !empty($_SESSION)) {
        header('Location: ?p=app');
        
    }
    require "controller_folder/controller.php";
    $view = new controller('inscription');
    
}


if ($page =="app") { 

    if(!empty($_SESSION)) {
        require "controller_folder/controller.php";
        
        $app = new controller("app");
        // print_r($_SESSION);

     
    }
    else {
        header('Location: ?p=register');

    }
         
    
}

ob_end_flush();

if($page == "logout") {
    session_destroy();
    header('Location: ?p=welcome');
    
}

?>