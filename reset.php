<!doctype html>
<html lang="en">
<?php 
require 'constants/settings.php'; 
require 'constants/check-login.php';

if (isset($_GET['token'])) {
$token = $_GET['token'];	
}else{
	header("location:./");
}

?>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title> - Reinitialiser le mot de passe</title>
	
	<meta name="description" content="Gestion d'Emplois en Ligne / Portail d'Emploi" />
	<meta name="keywords" content="emploi, travail, CV, candidats, candidature, employe, employeur, embauche, gestion des ressources humaines, RH, gestion d'emplois en ligne, entreprise, ouvrier, carriere, recrutement" />
	<meta name="author" content="BwireSoft">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="http://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:secure_url" content="https://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="Bwire Jobs" />
    <meta property="og:description" content="Gestion d'Emplois en Ligne / Portail d'Emploi" />

	<link rel="shortcut icon" href="images/ico/favicon.png">

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen">	
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/component.css" rel="stylesheet">
	
	<link rel="stylesheet" href="icons/linearicons/style.css">
	<link rel="stylesheet" href="icons/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="icons/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="icons/ionicons/css/ionicons.css">
	<link rel="stylesheet" href="icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" href="icons/rivolicons/style.css">
	<link rel="stylesheet" href="icons/flaticon-line-icon-set/flaticon-line-icon-set.css">
	<link rel="stylesheet" href="icons/flaticon-streamline-outline/flaticon-streamline-outline.css">
	<link rel="stylesheet" href="icons/flaticon-thick-icons/flaticon-thick.css">
	<link rel="stylesheet" href="icons/flaticon-ventures/flaticon-ventures.css">

	<link href="css/style.css" rel="stylesheet">

</head>


<body class="not-transparent-header">

	<div class="container-wrapper">

<?php include 'components/header.php'; ?>

		<div class="main-wrapper">


			<div class="breadcrumb-wrapper">
			
				<div class="container">
				
					<ol class="breadcrumb-list">
						<li><a href="./">Accueil</a></li>
						<li><span>Reinitialiser le mot de passe</span></li>
					</ol>
					
				</div>
				
			</div>


			<div class="login-container-wrapper">	
	
				<div class="container">
				
					<div class="row">
					
						<div class="col-md-10 col-md-offset-1">
						
							<div class="row">

								<div class="col-sm-6 col-sm-offset-3">
                                <?php
								require 'constants/check_reply.php';	
								?>
                                <form name="frm" action="app/change-pass.php" method="POST" autocomplete="off">
                                <div class="login-box-wrapper">
							
                                <div class="modal-header">
                                <h4 class="modal-title text-center">Reinitialisez votre mot de passe</h4>
                                </div>

                                <div class="modal-body">
																
                                <div class="row gap-20">
								<?php
								require 'constants/db_config.php';
								
								try {
                                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
                                $stmt = $conn->prepare("SELECT * FROM tbl_tokens WHERE token = :token limit 1");
								$stmt->bindParam(':token', $token);
                                $stmt->execute();
                                $result = $stmt->fetchAll();
                                $res = count($result);
								
								if ($res == "0") {
									                                  print '
	                            <div class="alert alert-warning">
								<strong>Impossible d\'utiliser ce jeton car</strong><br>
                                 <li>Ce jeton est invalide</li>
								 <li>Ce jeton a deja ete utilise</li>
	                          </div>
                                  ';
								 $invalid_token = true;
								 
								}else{

                                foreach($result as $row)
                                {
									?>
							    <div class="col-sm-12 col-md-12">

                                <div class="form-group"> 
                                <label>Nouveau mot de passe</label>
                                <input class="form-control" placeholder="Min 8 et Max 20 caracteres" name="password" required type="password"> 
                                </div>
												
                                 </div>
												
                                <div class="col-sm-12 col-md-12">
												
                                <div class="form-group"> 
                                <label>Confirmer le nouveau mot de passe</label>
                                <input class="form-control" placeholder="Min 8 et Max 20 caracteres" name="confirmpassword" required type="password"> 
                                </div>
												
                                </div>
								<?php
								$_SESSION['resetmail'] = $row['email'];
								?>
								<?php
								
 
	                            }
								}

					  
	                            }catch(PDOException $e)
                                {
           
                                }
	
	
                                ?>
												
</div>

</div>
<?php
if (isset($invalid_token)) {
	
}else{
print '
<div class="modal-footer text-center">
<button type="submit" onclick="return val();"  class="btn btn-primary">Reinitialiser mon mot de passe</button>
</div>';	
}

?>

										
</div>
</form>
									
								</div>
							
							</div>
							
						</div>
						
					</div>
					
				</div>
			
			</div>
<?php include 'components/footer.php'; ?>

		</div>


	</div> 


<div id="back-to-top">
   <a href="#"><i class="ion-ios-arrow-up"></i></a>
</div>

<script type="text/javascript">
function val(){
if(frm.password.value == "")
{
	alert("Entrez le mot de passe.");
	frm.password.focus(); 
	return false;
}
if((frm.password.value).length < 8)
{
	alert("Le mot de passe doit contenir au moins 8 caracteres.");
	frm.password.focus();
	return false;
}

if((frm.password.value).length > 20)
{
	alert("Le mot de passe doit contenir au maximum 20 caracteres.");
	frm.password.focus();
	return false;
}

if(frm.confirmpassword.value == "")
{
	alert("Entrez la confirmation du mot de passe.");
	return false;
}
if(frm.confirmpassword.value != frm.password.value)
{
	alert("La confirmation du mot de passe ne correspond pas.");
	return false;
}

return true;
}
</script>

<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="js/bootstrap-modal.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/jquery.slicknav.min.js"></script>
<script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="js/bootstrap-tokenfield.js"></script>
<script type="text/javascript" src="js/typeahead.bundle.min.js"></script>
<script type="text/javascript" src="js/bootstrap3-wysihtml5.min.js"></script>
<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="js/jquery-filestyle.min.js"></script>
<script type="text/javascript" src="js/bootstrap-select.js"></script>
<script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="js/handlebars.min.js"></script>
<script type="text/javascript" src="js/jquery.countimator.js"></script>
<script type="text/javascript" src="js/jquery.countimator.wheel.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/easy-ticker.js"></script>
<script type="text/javascript" src="js/jquery.introLoader.min.js"></script>
<script type="text/javascript" src="js/jquery.responsivegrid.js"></script>
<script type="text/javascript" src="js/customs.js"></script>


</body>

</html>