<?php
require_once('../Model/Admin.class.php');

$admin = new Admin($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['password'],$_POST['email'],$_POST['type']);
$admin->ajouter();

header("location:../liste-admin.php?resultat=oui");
exit();
?>