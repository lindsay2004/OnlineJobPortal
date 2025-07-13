<!doctype html>
<html lang="fr">
<?php 
include '../constants/settings.php'; 
include 'constants/check-login.php';

if ($user_online == "true") {
if ($myrole == "employer") {
}else{
header("location:../");		
}
}else{
header("location:../");	
}
?>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title> - Changer le mot de passe</title>
	<meta name="description" content="Gestion des emplois en ligne / Portail de l'emploi" />
	<meta name="keywords" content="emploi, travail, CV, candidats, candidature, employé, employeur, embauche, recrutement, gestion des ressources humaines, RH, gestion des emplois en ligne, entreprise, travailleur, carrière, recrutement, recrutement" />
	<meta name="author" content="BwireSoft">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="http://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:secure_url" content="https://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="Bwire Jobs" />
    <meta property="og:description" content="Gestion des emplois en ligne / Portail de l'emploi" />

	<link rel="shortcut icon" href="../images/ico/favicon.png">

	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" media="screen">	
	<link href="../css/animate.css" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">
	<link href="../css/component.css" rel="stylesheet">
	
	<link rel="stylesheet" href="../icons/linearicons/style.css">
	<link rel="stylesheet" href="../icons/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../icons/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="../icons/ionicons/css/ionicons.css">
	<link rel="stylesheet" href="../icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" href="../icons/rivolicons/style.css">
	<link rel="stylesheet" href="../icons/flaticon-line-icon-set/flaticon-line-icon-set.css">
	<link rel="stylesheet" href="../icons/flaticon-streamline-outline/flaticon-streamline-outline.css">
	<link rel="stylesheet" href="../icons/flaticon-thick-icons/flaticon-thick.css">
	<link rel="stylesheet" href="../icons/flaticon-ventures/flaticon-ventures.css">

	<link href="../css/style.css" rel="stylesheet">
	<link href="../css/employer-common.css" rel="stylesheet">
	
</head>


<body class="not-transparent-header">

	<div class="container-wrapper">

		<?php include '../components/header.php'; ?>

		<div class="main-wrapper employer-common-wrapper">
		
			<div class="breadcrumb-wrapper">
			
				<div class="container">
				
					<ol class="breadcrumb-list booking-step">
						<li><a href="../"><i class="fa fa-home"></i> Accueil</a></li>
						<li><span><i class="fa fa-key"></i> Changer le mot de passe</span></li>
					</ol>
					
				</div>
				
			</div>

			
			<div class="admin-container-wrapper">

				<div class="container">
				
					<div class="GridLex-gap-15-wrappper">
					
						<div class="GridLex-grid-noGutter-equalHeight">
						
							<div class="GridLex-col-3_sm-4_xs-12">
							
								<div class="admin-sidebar">
										
										
									<div class="admin-user-item for-employer">
										
										<div class="image">
										<?php 
										if ($logo == null) {
										print '<div class="logo-placeholder"><i class="fa fa-building fa-3x"></i><p>Logo de l\'entreprise</p></div>';
										}else{
										echo '<img alt="Logo '.$compname.'" title="'.$compname.'" class="company-logo" src="data:image/jpeg;base64,'.base64_encode($logo).'"/>';	
										}
										?>
										</div>
										
										<h4><?php echo "$compname"; ?></h4>
										
									</div>
									
									<div class="admin-user-action text-center">
									
										<a href="post-job.php" class="btn btn-primary btn-sm btn-inverse">
											<i class="fa fa-plus"></i> Publier une offre
										</a>
										
									</div>
									
									<ul class="admin-user-menu clearfix">
										<li  class="">
											<a href="./"><i class="fa fa-user"></i> Profil</a>
										</li>
										<li class="active">
										<a href="change-password.php"><i class="fa fa-key"></i> Changer le mot de passe</a>
										</li>
			
										<li>
											<a href="../company.php?ref=<?php echo "$myid"; ?>"><i class="fa fa-briefcase"></i> Aperçu de l'entreprise</a>
										</li>
										<li>
											<a href="my-jobs.php"><i class="fa fa-bookmark"></i> Emplois postés</a>
										</li>
										<li>
											<a href="../logout.php"><i class="fa fa-sign-out"></i> Déconnexion</a>
										</li>
									</ul>
									
								</div>

							</div>
							
							<div class="GridLex-col-9_sm-8_xs-12">
							
								<div class="admin-content-wrapper">

									<div class="admin-section-title">
									
										<h2><i class="fa fa-lock"></i> Sécurité du compte</h2>
										<p><i class="fa fa-shield"></i> Modifiez votre mot de passe pour sécuriser votre compte</p>
										
									</div>
									
									<form name="frm" class="post-form-wrapper" action="app/new-pass.php" method="POST">
								
											<div class="row gap-20">
                                             <?php include 'constants/check_reply.php'; ?>
												
												<div class="col-sm-6 col-md-6">
												
													<div class="form-group">
														<label><i class="fa fa-key"></i> Nouveau mot de passe</label>
														<input type="password" class="form-control" name="password" id="password" required placeholder="Entrez votre nouveau mot de passe" minlength="8">
														<div id="password-strength" class="password-strength" style="display: none;"></div>
													</div>
													
												</div>
												
												<div class="col-sm-6 col-md-6">
												
													<div class="form-group">
														<label><i class="fa fa-check-circle"></i> Confirmer le mot de passe</label>
														<input type="password" class="form-control" name="confirmpassword" id="confirmpassword" required placeholder="Confirmez votre nouveau mot de passe">
														<div id="password-match" class="password-strength" style="display: none;"></div>
													</div>
													
												</div>
												
												<div class="col-sm-12 mt-10">
													<button type="submit" onclick="return check_passwords();" class="btn btn-primary">
														<i class="fa fa-save"></i> Mettre à jour le mot de passe
													</button>
													<button type="reset" class="btn btn-primary btn-inverse">
														<i class="fa fa-undo"></i> Réinitialiser
													</button>
												</div>

											</div>
											
										</form><br>
										
									
								</div>

							</div>
							
						</div>

					</div>

				</div>
			
			</div>

			<?php include '../components/footer.php'; ?>
			
		</div>

	</div>

 
 
<div id="back-to-top">
   <a href="#"><i class="ion-ios-arrow-up"></i></a>
</div>

<script type="text/javascript">
// Validation en temps réel du mot de passe
document.getElementById('password').addEventListener('input', function() {
    const password = this.value;
    const strengthDiv = document.getElementById('password-strength');
    
    if (password.length === 0) {
        strengthDiv.style.display = 'none';
        return;
    }
    
    let strength = 0;
    let message = '';
    let className = '';
    
    // Vérification de la longueur
    if (password.length >= 8) strength++;
    if (password.length >= 12) strength++;
    
    // Vérification des caractères
    if (/[a-z]/.test(password)) strength++;
    if (/[A-Z]/.test(password)) strength++;
    if (/[0-9]/.test(password)) strength++;
    if (/[^A-Za-z0-9]/.test(password)) strength++;
    
    // Détermination de la force
    if (strength <= 2) {
        message = 'Mot de passe faible';
        className = 'weak';
    } else if (strength <= 4) {
        message = 'Mot de passe moyen';
        className = 'medium';
    } else {
        message = 'Mot de passe fort';
        className = 'strong';
    }
    
    strengthDiv.textContent = message;
    strengthDiv.className = 'password-strength ' + className;
    strengthDiv.style.display = 'block';
});

// Validation de la correspondance des mots de passe
document.getElementById('confirmpassword').addEventListener('input', function() {
    const password = document.getElementById('password').value;
    const confirmPassword = this.value;
    const matchDiv = document.getElementById('password-match');
    
    if (confirmPassword.length === 0) {
        matchDiv.style.display = 'none';
        return;
    }
    
    if (password === confirmPassword) {
        matchDiv.textContent = 'Les mots de passe correspondent';
        matchDiv.className = 'password-strength strong';
    } else {
        matchDiv.textContent = 'Les mots de passe ne correspondent pas';
        matchDiv.className = 'password-strength weak';
    }
    
    matchDiv.style.display = 'block';
});

function check_passwords(){
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmpassword').value;
    
    if(password == "") {
        alert("Veuillez entrer le mot de passe.");
        document.getElementById('password').focus(); 
        return false;
    }
    
    if(password.length < 8) {
        alert("Le mot de passe doit comporter au moins 8 caractères.");
        document.getElementById('password').focus();
        return false;
    }
    
    if(confirmPassword == "") {
        alert("Veuillez confirmer le mot de passe.");
        document.getElementById('confirmpassword').focus();
        return false;
    }
    
    if(confirmPassword != password) {
        alert("La confirmation du mot de passe ne correspond pas.");
        document.getElementById('confirmpassword').focus();
        return false;
    }
    
    return true;
}
</script>


<script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="../js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="../js/bootstrap-modal.js"></script>
<script type="text/javascript" src="../js/smoothscroll.js"></script>
<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="../js/wow.min.js"></script>
<script type="text/javascript" src="../js/jquery.slicknav.min.js"></script>
<script type="text/javascript" src="../js/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-tokenfield.js"></script>
<script type="text/javascript" src="../js/typeahead.bundle.min.js"></script>
<script type="text/javascript" src="../js/bootstrap3-wysihtml5.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="../js/jquery-filestyle.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-select.js"></script>
<script type="text/javascript" src="../js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="../js/handlebars.min.js"></script>
<script type="text/javascript" src="../js/jquery.countimator.js"></script>
<script type="text/javascript" src="../js/jquery.countimator.wheel.js"></script>
<script type="text/javascript" src="../js/slick.min.js"></script>
<script type="text/javascript" src="../js/easy-ticker.js"></script>
<script type="text/javascript" src="../js/jquery.introLoader.min.js"></script>
<script type="text/javascript" src="../js/jquery.responsivegrid.js"></script>
<script type="text/javascript" src="../js/customs.js"></script>


</body>



</html>