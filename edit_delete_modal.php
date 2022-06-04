<!-- Modal de modification-->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Modifier une souscrition</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Nom:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nom" value="<?php echo $row['nom']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Prenom:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="prenom" value="<?php echo $row['prenom']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Date de naissance</label>
					</div>
					<div class="col-sm-10">
						<input type="date" class="form-control" name="date_naissance" value="<?php echo $row['date_naissance']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Adresse d'habitation</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="adresse_habitation" value="<?php echo $row['adresse_habitation']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Produit</label>
					</div>
					<div class="col-sm-10">
						<select type="text" class="form-control" name="produit">
							<option value="<?php echo $row['produit']; ?>"><?php echo $row['produit']; ?></option>
						</select>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Montant souscription</label>
					</div>
					<div class="col-sm-10">
						<input type="integer" class="form-control" name="montant_souscription" value="<?php echo $row['montant_souscription']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Montant garantie</label>
					</div>
					<div class="col-sm-10">
						<input type="integer" class="form-control" name="montant_garantie" value="<?php echo $row['montant_garantie']; ?>">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Annuler</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Valider la modification</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- modal de suppression -->
<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h3 class="modal-title" id="myModalLabel">Suppression du client</h3></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Etre vous sure de supprimer la souscription de:</p>
				<h2 class="text-center"><?php echo $row['nom'].' '.$row['prenom']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>