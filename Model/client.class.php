<?php
class Client{
private $nom;
private $raison_sociale;
private $adresse;
private $matricule_fiscale;
private $telephone;
private $email;
private $password;


                

function __construct($nom,$raison_sociale,$adresse,$matricule_fiscale, $telephone, $email, $password){
$this->nom = $nom;
$this->raison_sociale = $raison_sociale;
$this->adresse = $adresse;
$this->matricule_fiscale = $matricule_fiscale;
$this->telephone = $telephone;
$this->email = $email;
$this->password = $password;





}


public function ajouter(){ 

include('../includes/connect_db.php');
    
	
    
		$req = $bdd->exec ("INSERT INTO `client`(`nom`,`raison_sociale`, `adresse`, `matricule_fiscale`, `telephone`,`email`,`password` ) VALUES ('$this->nom','$this->raison_sociale','$this->adresse','$this->matricule_fiscale','$this->telephone','$this->email','$this->password')");
		
		echo'oui';
               
    
}


    public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $r=$bdd->exec("UPDATE `client` SET `nom`='$this->nom',`raison_sociale`='$this->raison_sociale',`adresse`='$this->adresse',`matricule_fiscale`='$this->matricule_fiscale', `telephone`='$this->telephone', `email`='$this->email', `password`='$this->password' WHERE id=$id");
				
        
        echo'oui';
        //return TRUE;
 			}	
			
public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM client WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}


}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);


?>