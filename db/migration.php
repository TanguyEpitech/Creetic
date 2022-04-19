<?php

include 'pdo_connect.php';


$migration = new DB();


$migration->insert('CREATE TABLE user_loisir
(
    id INT AUTO_INCREMENT PRIMARY KEY,  
    user_id INT,
    Sport VARCHAR(255)
    
    )');
    
    
$migration->insert('CREATE TABLE loisir
(
    
    Sport VARCHAR(255)
    
    )');

$migration->insert('CREATE TABLE user
(
    nom VARCHAR(100),
    prenom VARCHAR(100),
    id INT AUTO_INCREMENT PRIMARY KEY,  
    date_naissance DATE,
    email VARCHAR(255),
    mot_de_passe VARCHAR(255),
    genre VARCHAR(255),
    ville VARCHAR(255),
    loisir VARCHAR(255)
    )');
    ?>