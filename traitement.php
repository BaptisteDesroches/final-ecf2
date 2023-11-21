<?php
//connecter à la bdd
$servername="localhost";
$username ="root";
$password ="root";

$bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', '');


// récupérer la data insite
if(isset($_POST['ok'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email_address = $_POST['email_address'];
}

//envoyer la data à la bdd
$requete = $bdd->prepare("INSERT INTO users VALUES (0, :username, :password, :email_address)";
$requete-> execute(
array(
    "username" =>$username,
    "password" =>$password,
    "email" =>$email_address,
))
);
    echo "Inscirption réussie !";
?>
