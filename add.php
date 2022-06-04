<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		// recuperation des champs du formulaire

        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $date_naissance = htmlspecialchars($_POST['date_naissance']);
        $adresse_habitation = htmlspecialchars($_POST['adresse_habitattion']);
        $produit = htmlspecialchars($_POST['produit']);
        $montant_souscription = htmlspecialchars($_POST['montant_souscription']);
        $montant_garantie = htmlspecialchars($_POST['garantie_financiere']);

	    //insertion dans la base de donneés
		$sql = "INSERT INTO members (nom, prenom, date_naissance, adresse_habitation, produit, montant_souscription, montant_garantie) VALUES ('$nom', '$prenom', '$date_naissance', '$adresse_habitation', '$produit', '$montant_souscription', '$montant_garantie')";

		//verification de l'insertion
		if($conn->query($sql)){
			$_SESSION['success'] = "Souscription réuissi";
		}
		else{
			$_SESSION['error'] = 'Erreur lors de la souscription';
		}
	}
	else{
		$_SESSION['error'] = " Veuillez remplir tous les champs";
	}

	header('location: index.php');
?>