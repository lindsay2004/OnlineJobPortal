<form name="frm" action="app/create-account.php" method="POST" autocomplete="off">
<div class="login-box-wrapper">
							
<div class="modal-header">
<h4 class="modal-title text-center">Créer votre compte gratuitement</h4>
</div>

<div class="modal-body">
																
<div class="row gap-20">
											

												

												
<div class="col-sm-12 col-md-12">

<div class="form-group"> 
<label>Nom de l'entreprise</label>
<input class="form-control" placeholder="Entrez le nom de votre entreprise" name="company" required type="text"> 
</div>
												
</div>

<div class="col-sm-12 col-md-12">

<div class="form-group"> 
<label>Type d'entreprise</label>
<input class="form-control" placeholder="Ex: Réservation/Voyage, Logiciel informatique etc" name="type" required type="text"> 
</div>
												
</div>
												
<div class="col-sm-12 col-md-12">

<div class="form-group"> 
<label>Adresse email</label>
<input class="form-control" placeholder="Entrez votre adresse email" name="email" required type="text"> 
</div>
												
</div>
												
<div class="col-sm-12 col-md-12">
												
<div class="form-group"> 
<label>Mot de passe</label>
<input class="form-control" placeholder="Min 8 et Max 20 caractères" name="password" required type="password"> 
</div>
												
</div>
												
<div class="col-sm-12 col-md-12">
												
<div class="form-group"> 
<label>Confirmation du mot de passe</label>
<input class="form-control" placeholder="Retaper le mot de passe à nouveau" name="confirmpassword" required type="password"> 
</div>
												
</div>
												
<input type="hidden" name="acctype" value="102">
												
												
</div>

</div>

<div class="modal-footer text-center">
<button  onclick="return val();" type="submit" name="reg_mode" class="btn btn-primary">S'inscrire</button>
</div>
										
</div>
</form>