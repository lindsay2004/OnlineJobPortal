<!doctype html>
<html lang="fr">
<?php 
require '../constants/settings.php'; 
require 'constants/check-login.php';

if ($user_online == "true") {
if ($myrole == "employer") {
}else{
header("location:../");		
}
}else{
header("location:../");	
}

if (isset($_GET['page'])) {
$page = $_GET['page'];
if ($page=="" || $page=="1")
{
$page1 = 0;
$page = 1;
}else{
$page1 = ($page*5)-5;
}					
}else{
$page1 = 0;
$page = 1;	
}
?>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title> - Mes emplois</title>
	<meta name="description" content="Gestion en ligne des emplois / Portail de l'emploi" />
	<meta name="keywords" content="emploi, travail, CV, candidats, candidature, employé, employeur, embauche, recrutement, gestion des ressources humaines, RH, gestion en ligne des emplois, entreprise, travailleur, carrière, recrutement, recrutement" />
	<meta name="author" content="BwireSoft">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="http://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:secure_url" content="https://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="Bwire Jobs" />
    <meta property="og:description" content="Gestion en ligne des emplois / Portail de l'emploi" />

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
	<link href="../css/employer-my-jobs.css" rel="stylesheet">
	
</head>


<body class="not-transparent-header">

	<div class="container-wrapper">

		<?php include '../components/header.php'; ?>

		<div class="main-wrapper">
		
			<div class="breadcrumb-wrapper">
			
				<div class="container">
				
					<ol class="breadcrumb-list booking-step">
						<li><a href="../">Bwire Jobs</a></li>
						<li><span>Mes emplois</span></li>
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
										print '<center>Logo de l\'entreprise ici</center>';
										}else{
										echo '<center><img alt="image" title="'.$compname.'" width="180" height="100" src="data:image/jpeg;base64,'.base64_encode($logo).'"/></center>';	
										}
										?><br>
										</div>
										
										<h4><?php echo "$compname"; ?></h4>
										
									</div>
									
									<div class="admin-user-action text-center">
									
										<a href="post-job.php" class="btn btn-primary btn-sm btn-inverse">
											<i class="fa fa-plus-circle"></i> Poster un Emploi
										</a>
										
									</div>
									
									<ul class="admin-user-menu clearfix">
										<li >
											<a href="./"><i class="fa fa-user"></i> Mon Profil</a>
										</li>
										<li class="">
										<a href="change-password.php"><i class="fa fa-key"></i> Changer le Mot de Passe</a>
										</li>
			
										<li>
											<a href="../company.php?ref=<?php echo "$myid"; ?>"><i class="fa fa-briefcase"></i> Aperçu de l'Entreprise</a>
										</li>
										<li  class="active">
											<a href="my-jobs.php"><i class="fa fa-bookmark"></i> Mes Emplois Postés</a>
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
									
										<h2><i class="fa fa-briefcase"></i> Mes Emplois Postés</h2>
										
									</div>
									<?php require 'constants/check_reply.php'; ?>
									
									<!-- Statistiques rapides -->
									<div class="stats-overview" style="margin-bottom: 2rem; padding: 1.5rem; background: linear-gradient(135deg, #3498db 0%, #2980b9 100%); border-radius: 8px; color: white;">
										<div class="row">
											<div class="col-md-4 text-center">
												<i class="fa fa-file-text-o fa-2x" style="margin-bottom: 0.5rem;"></i>
												<h4 style="margin: 0; font-weight: 600;">Emplois Actifs</h4>
												<p style="margin: 0; opacity: 0.9;">Gérez vos offres</p>
											</div>
											<div class="col-md-4 text-center">
												<i class="fa fa-users fa-2x" style="margin-bottom: 0.5rem;"></i>
												<h4 style="margin: 0; font-weight: 600;">Candidats</h4>
												<p style="margin: 0; opacity: 0.9;">Voir les candidatures</p>
											</div>
											<div class="col-md-4 text-center">
												<i class="fa fa-plus-circle fa-2x" style="margin-bottom: 0.5rem;"></i>
												<h4 style="margin: 0; font-weight: 600;">Nouveau</h4>
												<p style="margin: 0; opacity: 0.9;">Poster un emploi</p>
											</div>
										</div>
									</div>
									
									<div class="job-item-grid-wrapper">
										

					
										<div class="GridLex-gap-30">
										
											<div class="GridLex-grid-noGutter-equalHeight">
									<?php
										require '../constants/db_config.php';
										try {
                                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                        $stmt = $conn->prepare("SELECT * FROM tbl_jobs WHERE company = '$myid' ORDER BY enc_id DESC LIMIT $page1,5");
                                        $stmt->execute();
                                        $result = $stmt->fetchAll();
   
                                        foreach($result as $row)
                                        {
										   $jobcity = $row['city'];
										   $jobcountry = $row['country'];
										   $type = $row['type'];
										   $title = $row['title'];
										   $deadline = $row['closing_date'];
										   if ($type == "Freelance") {
											 $sta = '<span class="label label-success">Freelance</span>';
											  
										   }
										   if ($type == "Part-time") {
											 $sta = '<span class="label label-danger">Temps partiel</span>';
											  
										   }
										   if ($type == "Full-time") {
											 $sta = '<span class="label label-warning">Temps plein</span>';
											  
										   }
										   
										   ?>
										   										  <div class="GridLex-col-4_sm-6_xs-6_xss-12">
												
											<div class="job-item-grid">
													

											<div class="labeling">
											<?php echo "$sta"; ?>
											</div>
														
											<a target="_blank" href="../explore-job.php?jobid=<?php echo $row['job_id']; ?>">
														
											<div class="image">
															
											<div class="vertical-middle">
																
											<?php 
										    if ($logo == null) {
										     print '<center>Logo de l\'entreprise ici</center>';
										    }else{
										    echo '<center><img alt="image" title="'.$compname.'" width="180" height="100" src="data:image/jpeg;base64,'.base64_encode($logo).'"/></center>';	
										     }
										     ?>
																
											</div>
																
											</div>
														
											<div class="content">
											<h4 class="heading"><?php echo "$title"; ?></h4>
											<p class="location"><i class="fa fa-map-marker text-primary"></i> <strong class="text-primary"><?php echo "$jobcountry" ?></strong> - <?php echo "$jobcity" ?></p>
											<p class="date text-muted font12 font-italic">
												<i class="fa fa-clock-o"></i> Date limite - <?php echo "$deadline"; ?>
											</p>
											</div>
															
											</a>
														
											<div class="content-bottom">
											<div class="sub-category">
											<a target="_blank" href="view-applicants.php?jobid=<?php echo $row['job_id']; ?>">
												<i class="fa fa-users"></i> Candidats
											</a>
											<a href="edit-job.php?jobid=<?php echo $row['job_id']; ?>">
												<i class="fa fa-edit"></i> Modifier
											</a>
											<a onclick = "return confirm('Êtes-vous sûr de vouloir supprimer cet emploi ? Cette action est irréversible.')" href="app/drop-job.php?id=<?php echo $row['job_id']; ?>">
												<i class="fa fa-trash"></i> Supprimer
											</a>
											</div>
											</div>
														
											</div>
													
												</div>
												
												<?php
		
 
	                                    }

					  
	                                    }catch(PDOException $e)
                                        {
                         
                                        }
                                             ?>
											</div>
											
										</div>
										
									</div>
									
								<div class="pager-wrapper">
								
									<div class="pagination-info" style="text-align: center; margin-bottom: 1rem; color: #7f8c8d; font-size: 0.9rem;">
										<i class="fa fa-info-circle"></i> Page <?php echo $page; ?> sur <?php echo $records; ?> - <?php echo $total_records; ?> emploi(s) au total
									</div>
								
						            <ul class="pager-list">
								<?php
								$total_records = 0;
								require '../constants/db_config.php';
								try {
                                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                $stmt = $conn->prepare("SELECT * FROM tbl_jobs WHERE company = '$myid' ORDER BY enc_id");
                                $stmt->execute();
                                $result = $stmt->fetchAll();
   
                                foreach($result as $row)
                                {
		                        $total_records++;
 
	                            }

					  
	                            }catch(PDOException $e)
                                {
           
                                }
										
								$records = $total_records/5;
                                $records = ceil($records);
				                if ($records > 1 ) {
								$prevpage = $page - 1;
								$nextpage = $page + 1;
								
								print '<li class="paging-nav" '; if ($page == "1") { print 'class="disabled"'; } print '><a '; if ($page == "1") { print ''; } else { print 'href="my-jobs.php?page='.$prevpage.'"';} print '><i class="fa fa-chevron-left"></i></a></li>';
					            for ($b=1;$b<=$records;$b++)
                                 {
                                 
		                        ?><li  class="paging-nav" <?php if ($b == $page ) { print 'class="active"'; } ?> ><a href="my-jobs.php?page=<?php echo "$b"; ?>"><?php echo $b." "; ?></a></li><?php
                                 }	
								 print '<li class="paging-nav"'; if ($page == $records) { print 'class="disabled"'; } print '><a '; if ($page == $records) { print ''; } else { print 'href="my-jobs.php?page='.$nextpage.'"';} print '><i class="fa fa-chevron-right"></i></a></li>';
					             }

								
								?>

						            </ul>	
					
					                </div>
									
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