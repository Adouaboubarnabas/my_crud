<?php
    // operation de suppression d'un client
	session_start();
	include_once('connection.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM members WHERE id = '".$_GET['id']."'";

		
		if($conn->query($sql)){
			$_SESSION['success'] = "Client supprimé avec succès";
		}
		else{
			$_SESSION['error'] = " Une erreur c'est produit lors de la suppression du client";
		}
	}
	else{
		$_SESSION['error'] = 'Veuillez selectionner le client à supprimer';
	}

	header('location: index.php');
?>