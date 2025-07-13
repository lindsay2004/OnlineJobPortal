<?php 
// ==========================
// CONFIGURATION & DONNÉES
// ==========================
include 'constants/settings.php'; 
include 'constants/check-login.php';
require 'constants/db_config.php';

// Récupération des catégories
$categories = [];
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM tbl_categories ORDER BY category");
    $stmt->execute();
    $categories = $stmt->fetchAll();
} catch (PDOException $e) {}

// Récupération des pays
$countries = [];
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM tbl_countries ORDER BY country_name");
    $stmt->execute();
    $countries = $stmt->fetchAll();
} catch (PDOException $e) {}

// Récupération des entreprises aléatoires
$companies = [];
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE role = 'employer' ORDER BY rand() LIMIT 8");
    $stmt->execute();
    $companies = $stmt->fetchAll();
} catch (PDOException $e) {}

// Récupération des dernières offres
$jobs = [];
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM tbl_jobs ORDER BY enc_id DESC LIMIT 8");
    $stmt->execute();
    $jobs = $stmt->fetchAll();
} catch (PDOException $e) {}
?>
<!doctype html>
<html lang="fr">
<head>
    <!-- ==========================
         MÉTA ET FEUILLES DE STYLE
    ========================== -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> - Portail d'Emploi</title>
	<meta name="description" content="Gestion d'Emplois en Ligne / Portail d'Emploi" />
	<meta name="keywords" content="emploi, travail, CV, candidats, candidature, employe, employeur, embauche, gestion des ressources humaines, RH, gestion d'emplois en ligne, entreprise, ouvrier, carriere, recrutement" />
	<meta name="author" content="BwireSoft">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="http://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:secure_url" content="https://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="" />
    <meta property="og:description" content="Online Job Management / Job Portal" />
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
	<link href="css/index-enhancements.css" rel="stylesheet">
  <style>
    .autofit2 {
	height:70px;
	width:400px;
    object-fit:cover; 
  }
      .autofit3 {
	height:80px;
	width:100px;
    object-fit:cover; 
  }
  </style>
</head>
<body class="home">
	<div id="introLoader" class="introLoading"></div>
	<div class="container-wrapper">
        <!-- ==========================
             EN-TÊTE / NAVBAR
        ========================== -->
        <?php include 'components/header.php'; ?>
		<div class="main-wrapper">
            <!-- ==========================
                 SECTION HERO
            ========================== -->
			<section class="hero" style="background-image:url('images/hero-header/02.jpg');">
				<div class="container">
					<div class="hero-content">
						<h1>Votre Avenir Commence Ici</h1>
						<p>Trouvez Votre Prochain Emploi Ou Carrière</p>
					<div class="main-search-form-wrapper">
						<form action="job-list.php" method="GET" autocomplete="off">
							<div class="form-holder">
								<div class="row gap-0">
									<div class="col-xss-6 col-xs-6 col-sm-6">
                                        <select class="form-control" name="category" required>
												<option value="">- Sélectionner une catégorie -</option>
                                            <?php foreach ($categories as $row): ?>
													<option value="<?php echo $row['category']; ?>"><?php echo $row['category']; ?></option>
                                            <?php endforeach; ?>
										</select>
									</div>
									<div class="col-xss-6 col-xs-6 col-sm-6">
                                        <select class="form-control" name="country" required>
												<option value="">- Sélectionner un pays -</option>
                                            <?php foreach ($countries as $row): ?>
													<option value="<?php echo $row['country_name']; ?>"><?php echo $row['country_name']; ?></option>
                                            <?php endforeach; ?>
										</select>
									</div>
								</div>
							</div>
							<div class="btn-holder">
									<button name="search" value="✓" type="submit" class="btn">
										<i class="ion-android-search"></i>
									</button>
							</div>
						</form>
						</div>
					</div>
				</div>
			</section>
            <!-- ==========================
                 SECTION PROCESSUS
            ========================== -->
			<section class="post-hero bg-light">
				<div class="container">
					<div class="section-title">
						<h2>Comment Ça Marche ?</h2>
						<p>Trois Étapes Simples Pour Trouver Votre Emploi Idéal</p>
					</div>
					<div class="process-item-wrapper">
						<div class="row">
							<div class="col-sm-4">
								<div class="process-item">
									<div class="icon">
										<i class="flaticon-line-icon-set-magnification-lens"></i>
									</div>
									<div class="content">
										<h5>01 / Rechercher Un Emploi</h5>
										<p>Parcourez Nos Milliers D'Offres D'Emploi Et Trouvez Celle Qui Vous Correspond</p>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="process-item">
									<div class="icon">
										<i class="flaticon-line-icon-set-pencil"></i>
									</div>
									<div class="content">
										<h5>02 / Postuler À Un Emploi</h5>
										<p>Envoyez Votre Candidature En Quelques Clics Avec Votre CV Optimisé</p>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="process-item">
									<div class="icon">
										<i class="flaticon-line-icon-set-calendar"></i>
									</div>
									<div class="content">
										<h5>03 / Commencer À Travailler</h5>
										<p>Recevez Des Réponses Rapides Et Démarrez Votre Nouvelle Carrière</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
            <!-- ==========================
                 SECTION ENTREPRISES ALÉATOIRES
            ========================== -->
			<section class="pt-0 pb-50">
				<div class="container">
							<div class="section-title">
						<h2>Entreprises Partenaires</h2>
						<p>Découvrez Les Entreprises Qui Nous Font Confiance</p>
					</div>
					<div class="row top-company-wrapper">
                        <?php foreach ($companies as $row): ?>
                            <?php $complogo = $row['avatar']; ?>
					<div class="col-xss-12 col-xs-6 col-sm-4 col-md-3">
					<div class="top-company">
					<div class="image">
                                        <?php if ($complogo == null): ?>
                                            <img class="autofit2" alt="image" src="images/blank.png"/>
                                        <?php else: ?>
                                            <img class="autofit2" alt="image" src="data:image/jpeg;base64,<?php echo base64_encode($complogo); ?>"/>
                                        <?php endif; ?>
					</div>
                                    <h6><?php echo $row['first_name']; ?></h6>
									<a target="_blank" href="company.php?ref=<?php echo $row['member_no']; ?>">Voir L'Entreprise</a>
					</div>
					</div>
                        <?php endforeach; ?>
					</div>
				</div>
			</section>
            <!-- ==========================
                 SECTION DERNIÈRES OFFRES
            ========================== -->
			<section class="bg-light pt-80 pb-80">
				<div class="container">
							<div class="section-title">
						<h2>Dernières Offres</h2>
						<p>Les Opportunités Les Plus Récentes Pour Votre Carrière</p>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="recent-job-wrapper">
                                <?php foreach ($jobs as $row): ?>
							<?php
							$jobcity = $row['city'];
							$jobcountry = $row['country'];
							$type = $row['type'];
							$title = $row['title'];
							$closingdate = $row['closing_date'];
							$company_id = $row['company'];
							$post_date = date_format(date_create_from_format('d/m/Y', $closingdate), 'd');
                            $post_month = date_format(date_create_from_format('d/m/Y', $closingdate), 'F');
                            $post_year = date_format(date_create_from_format('d/m/Y', $closingdate), 'Y');
							$stmtb = $conn->prepare("SELECT * FROM tbl_users WHERE member_no = '$company_id' and role = 'employer'");
                            $stmtb->execute();
                            $resultb = $stmtb->fetchAll();
                                    $complogo = null;
                                    $thecompname = '';
							foreach($resultb as $rowb) {
							$complogo = $rowb['avatar'];
							$thecompname = $rowb['first_name'];	
							}
							if ($type == "Freelance") {
                                        $sta = '<div class="job-label label label-success">Freelance</div>';
                                    } elseif ($type == "Part-time") {
                                        $sta = '<div class="job-label label label-danger">Temps partiel</div>';
                                    } elseif ($type == "Full-time") {
                                        $sta = '<div class="job-label label label-warning">Temps plein</div>';
                                    } else {
                                        $sta = '';
							}
							?>
							<a class="recent-job-item" target="_blank" href="explore-job.php?jobid=<?php echo $row['job_id']; ?>">
							<div class="GridLex-grid-middle">
							<div class="GridLex-col-5_xs-12">
							<div class="job-position">
							<div class="image">
                                                        <?php if ($complogo == null): ?>
													<img alt="image" src="images/blank.png"/>
                                                        <?php else: ?>
													<img alt="image" title="<?php echo $thecompname; ?>" width="180" height="100" src="data:image/jpeg;base64,<?php echo base64_encode($complogo); ?>"/>
                                                        <?php endif; ?>
							</div>
							<div class="content">
							<h4><?php echo "$title"; ?></h4>
							<p><?php echo "$thecompname"; ?></p>
							</div>
							</div>
							</div>
							<div class="GridLex-col-5_xs-8_xss-12 mt-10-xss">
							<div class="job-location">
                                                    <i class="fa fa-map-marker text-primary"></i> <?php echo "$jobcountry" ?> - <?php echo "$jobcity" ?>
							</div>
							</div>
							<div class="GridLex-col-2_xs-4_xss-12">
							<?php echo "$sta"; ?>
							<span class="font12 block spacing1 font400 text-center">Jusqu'au - <?php echo "$post_month"; ?> <?php echo "$post_date"; ?>, <?php echo "$post_year"; ?></span>
							</div>
							</div>
							</a>
                                <?php endforeach; ?>
							</div>
						</div>
						</div>
					</div>
            </section>
            <!-- ==========================
                 PIED DE PAGE
            ========================== -->
<?php include 'components/footer.php'; ?>
					</div>
				</div>
<div id="back-to-top">
   <a href="#"><i class="ion-ios-arrow-up"></i></a>
</div>
    <!-- ==========================
         SCRIPTS JS
    ========================== -->
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