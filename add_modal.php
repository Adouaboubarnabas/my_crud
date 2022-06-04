<!-- Modal d'ajouter-->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Veuillez remplir la fiche de sousciption </h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Nom:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nom" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Prenom:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="prenom" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Date de naissance:</label>
					</div>
					<div class="col-sm-10">
						<input type="date" class="form-control" name="date_naissance" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Adresse d'habitation:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="adresse_habitattion" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Produit</label>
					</div>
					<div class="col-sm-10">
						<select name="produit" value="produit">
							<option>Assurance sante</option>
							<option>Assurance education</option>
							<option>Assurance retraire</option>
							<option>Assurance prevoyance</option>
						</select>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Montant Souscription</label>
					</div>
					<div class="col-sm-10">
						<input type="integer" class="form-control" name="montant_souscription" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Garantie financière</label>
					</div>
					<div class="col-sm-10">
						<input type="integer" class="form-control" name="garantie_financiere" required>
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Annuler</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span>Enregister</a>
			</form>
            </div>

        </div>
    </div>
</div>