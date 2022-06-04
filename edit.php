<?php
	session_start();
	include_once('connection.php');
    // recueration des données envoyer par le formulaire
	
	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$date_naissance = $_POST['date_naissance'];
		$adresse_habitation = $_POST['adresse_habitation'];	
		$produit = $_POST['produit'];
		$montant_souscription = $_POST['montant_souscription'];
		$montant_garantie = $_POST['montant_garantie'];
		$sql = "UPDATE members SET nom = '$nom', prenom = '$prenom', date_naissance = '$date_naissance', adresse_habitation = '$adresse_habitation', produit = '$produit', montant_souscription = '$montant_souscription', montant_garantie = '$montant_garantie' WHERE id = '$id'";

		// verification de la valisation de donneé
		if($conn->query($sql)){
			$_SESSION['success'] = "Client modifié avec succès";
		}
		else{
			$_SESSION['error'] = "Une erreur c'est produit lors de la modification du client";
		}
	}
	else{
		$_SESSION['error'] = " Veuillez remplir tous les champs";
	}

	header('location: index.php');

?>