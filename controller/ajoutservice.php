<?php
require_once('../Model/service.class.php');

$service = new Service($_POST['titre'],$_POST['description'],$_POST['prix']);
$service->ajouter();

header("location:../liste-service.php?resultat=oui");
exit();
?>