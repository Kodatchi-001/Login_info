<?php
try{

$login = new PDO('mysql:host=localhost;dbname=information;port=3306;charset=utf8', 'root', '555663kdt');

$nom = $_POST['nm'];
$prenom = $_POST['pr'];
$email = $_POST['eml'];

$donne = $login->prepare('INSERT INTO util (Nom, Prenom, Email) VALUES (:nom, :prenom, :email)');
$donne->bindParam(':nom', $nom);
$donne->bindParam(':prenom', $prenom);
$donne->bindParam(':email', $email);
$donne->execute();
echo "Votre inforamtion et sauvgarder";
} 
catch (error $e) {
    echo "Erreur d'insertion: ". $e->getMessage();
}
?>