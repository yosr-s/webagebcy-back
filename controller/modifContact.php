<?php
require_once('../Model/contact.class.php');

$contact = new Contact($_POST['nom'],$_POST['email'],$_POST['sujet'],$_POST['message']);
$contact->modifier();

header("location:../liste-contact.php?resultat=oui modif");
exit();
?>