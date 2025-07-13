<form name="frm" action="app/create-account.php" method="POST" autocomplete="off">
<div class="login-box-wrapper shadow-enhanced">
							
<div class="modal-header">
<h4 class="modal-title text-center">Créer Votre Compte Gratuitement</h4>
</div>

<div class="modal-body">
																
<div class="row gap-20">
											

												

												
<div class="col-sm-12 col-md-12">

<div class="form-group"> 
<label>Nom De L'Entreprise</label>
<input class="form-control" placeholder="Entrez Le Nom De Votre Entreprise" name="company" required type="text"> 
</div>
												
</div>

<div class="col-sm-12 col-md-12">

<div class="form-group"> 
<label>Type D'Entreprise</label>
<input class="form-control" placeholder="Ex: Réservation/Voyage, Logiciel Informatique Etc" name="type" required type="text"> 
</div>
												
</div>
												
<div class="col-sm-12 col-md-12">

<div class="form-group"> 
<label>Adresse Email</label>
<input class="form-control" placeholder="Entrez Votre Adresse Email" name="email" required type="text"> 
</div>
												
</div>
												
<div class="col-sm-12 col-md-12">
												
<div class="form-group"> 
<label>Mot De Passe</label>
<input class="form-control" placeholder="Min 8 Et Max 20 Caractères" name="password" required type="password"> 
</div>
												
</div>
												
<div class="col-sm-12 col-md-12">
												
<div class="form-group"> 
<label>Confirmation Du Mot De Passe</label>
<input class="form-control" placeholder="Retaper Le Mot De Passe À Nouveau" name="confirmpassword" required type="password"> 
</div>
												
</div>
												
<input type="hidden" name="acctype" value="102">
												
												
</div>

</div>

<div class="modal-footer text-center">
<button  onclick="return val();" type="submit" name="reg_mode" class="btn btn-primary">S'Inscrire</button>
</div>
										
</div>
</form>