<?php
require_once('../Model/service.class.php');

$service = new Service($_POST['titre'],$_POST['description'],$_POST['prix']);
$service->modifier();

header("location:../liste-service.php?resultat=oui modif");
exit();
?>