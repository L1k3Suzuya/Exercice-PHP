<?php
$email = $_POST['email'];
$password = $_POST['password'];
if ($email == 'utilisateur@example.com' && $password == 'motdepasse') { 
    echo 'Connexion réussie !';
} else {
    echo 'Adresse e-mail ou mot de passe incorrect.';
}
?>
