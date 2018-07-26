<div class="container-fluid">
	<div class="row">
			<h3>Checkout</h3>
	</div>

	<div class="row">
		<div class="col-sm-9 dataUser">
			<div id="dataProfil" class="row">
				<form method="POST" action="" class="row">
					<div class="form-group col-sm-6">
						<label>Nom<span>*</span></label>
						<input class="form-control" id="nom" type="text" name="nom"/><br>

						<label>Prénom<span>*</span></label>
						<input class="form-control" id="prenom" type="text" name="prenom"/>
					</div>
					<div class="form-group col-sm-6">
						<label>Email<span>*</span></label>
						<input class="form-control" id="email" type="email" name="email" /><br>

						<label>Numéro de téléphone<span>*</span></label>
						<input class="form-control" id="tel" type="text" name="tel"/>
					</div>
				</form>
			</div>

			<div id="dataBank" class="row">
				<form method="POST" action="" class="row">
					<div class="form-group col-sm-6 dataCard">
						<h5>Info</h5> <p>Sub Info</p>
							<label>Type de carte <span>*</span></label>
							<select class="form-control slct">
								<option>-Choisir type de carte-</option>
								<option>Master Card</option>
								<option>Visa</option>
								<option>Visa Electron</option>
								<option>Maestro</option>
							</select><br>
							<label>Nom de la carte <span>*</span></label>
							<input class="form-control" id="NameCard" type="text" name="NameCard"/><br>

							<label>Numéro de la carte <span>*</span></label>
							<input class="form-control" id="NumCard" type="text" name="NumCard"/><br>

							<label>Date expiration de la carte<span>*</span></label>
							<input class="form-control" id="ExpCard" type="date" name="ExpCard"/><br>

							<label>Numéro de sécurité <span>*</span></label>
							<input class="form-control" id="SecurCard" type="text" name="SecurCard"/><br>
					</div>

					<div class="form-group col-sm-6 dataFact">
						<h5>Info</h5> <p>Sub Info</p>

							<label>Adreese 1<span>*</span></label>
							<input class="form-control" id="AddFact" type="text" name="AddFact"/><br>
							<label>Adreese 2</label>
							<input class="form-control" id="AddFact2" type="text" name="AddFactFact2"/><br>
							<label>Ville<span>*</span></label>
							<input class="form-control" id="CityFact" type="text" name="CityFact"/><br>
							<label>Code Postal<span>*</span></label>
							<input class="form-control" id="CPFact" type="text" name="CPFact"/><br>
							<label>Pays<span>*</span></label>
							<select class="form-control slct" id="PaysFact" name="PaysFact">
								<optgroup label="Europe"></optgroup>
								<optgroup label="Afrique"></optgroup>
								<optgroup label="Amérique du Nord"></optgroup>
								<optgroup label="Amérique du Sud"></optgroup>
								<optgroup label="Asie"></optgroup>
								<optgroup label="Océanie"></optgroup>
							</select><br>
					</div>
					<div class="checkbox col-sm-12">
						<label>
							<input type="checkbox" name="SaveCard">
							Souhaitez-vous sauvergarder vos coordonnées bancaires ainsi que votre adresse de facturation ?
						</label>
					</div>
				</form>
			</div>

			<div id="dataAddress" class="row">
				<form method="POST" action="" class="row">
					<div class="form-group col-sm-6 dataShip">
						<h5>Info</h5> <p>Sub Info</p>

							<label>Envoyer à<span>*</span></label>
							<select class="form-control slct">
								<option>-Adresse de facturation-</option>
								<option>-Nouvelle adresse-</option>
							</select><br>

							<label>Nom<span>*</span></label>
						<input class="form-control" id="NomShip" type="text" name="NomShip"/><br>
						<label>Prénom<span>*</span></label>
						<input class="form-control" id="PrenomShip" type="text" name="PrenomShip"/><br>

						<label>Numéro de téléphone<span>*</span></label>
						<input class="form-control" id="TelShip" type="text" name="TelShip"/><br>

						<label>Instruction de livraison</label>
						<input class="form-control" type="text" name="infoShip">
					</div>

					<div class="form-group col-sm-6 dataShip">
						<h5>Info</h5> <p>Sub Info</p>

							<label>Adreese 1<span>*</span></label>
							<input class="form-control" id="AddShip" type="text" name="AddShip"/><br>
							<label>Adreese 2</label>
							<input class="form-control" id="AddShip2" type="text" name="AddShip2"/><br>
							<label>Ville<span>*</span></label>
							<input class="form-control" id="CityShip" type="text" name="CityShip"/><br>
							<label>Code Postal<span>*</span></label>
							<input class="form-control" id="CPShip" type="text" name="CPShip"/><br>
							<label>Pays<span>*</span></label>
							<select class="form-control slct" id="PaysShip" name="PaysShip">
								<optgroup label="Europe"></optgroup>
								<optgroup label="Afrique"></optgroup>
								<optgroup label="Amérique du Nord"></optgroup>
								<optgroup label="Amérique du Sud"></optgroup>
								<optgroup label="Asie"></optgroup>
								<optgroup label="Océanie"></optgroup>
							</select><br>
					</div>
					<div class="col-sm-12 BformReview">
						<button>Revoir la commande</button>
					</div>
				</form>
			</div>

		</div>
		<div class="col-sm-3 recapPanier">
			<div class="row headPanier">
				<div class="col-sm-6"><p>Photographie</p></div>
				<div class="col-sm-6 Colright"><p>Sous-total</p></div>
			</div>

			<div class="row detailPanier">
				<div class="col-sm-6 ColLeft">
					<div class="row"><p>Titre</p></div>
					<div class="row"><p>Artiste</p></div>
					<div class="row"><p>Quantité</p></div>
					<div class="row"><p>Prix unitaire</p></div>
					<div class="row"><p>Dimension</p></div>
					<div class="row"><p>Finition</p></div>
					<div class="row"><p>Cadre</p></div>
				</div>
				<div class="col-sm-6 Colright">
					<div class="row"><p>Nuage</p></div>
					<div class="row"><p>Clara</p></div>
					<div class="row"><p>2</p></div>
					<div class="row"><p>100</p></div>
					<div class="row"><p>2</p></div>
					<div class="row"><p>5</p></div>
					<div class="row"><p>6</p></div>
				</div>
			</div>

			<div class="row totalPanier">
				<div class="col-sm-6 ColLeft">
					<div class="row"><p>Sous-total</p></div>
					<div class="row"><p>Frais de port</p></div>
					<div class="row"><p>Total</p></div>
				</div>
				<div class="col-sm-6 Colright">
					<div class="row"><p>200</p></div>
					<div class="row"><p>50</p></div>
					<div class="row"><p>250</p></div>
				</div>
			</div>
		</div>
	</div>
</div>

