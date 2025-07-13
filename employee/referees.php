<!doctype html>
<html lang="fr">
<?php 
require '../constants/settings.php'; 
require 'constants/check-login.php';

if ($user_online == "true") {
if ($myrole == "employee") {
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

	<title>Portail Emploi - Referents</title>
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
	<link href="../css/employee-final.css" rel="stylesheet">
	<link href="../css/employee-sidebar.css" rel="stylesheet">
	
</head>
  <style>
  
    .autofit2 {
	height:80px;
	width:100px;
    object-fit:cover; 
  }
  
  </style>

<body class="not-transparent-header">

	<div class="container-wrapper">

		<?php include '../components/header.php'; ?>

		<div class="main-wrapper">

			<div class="breadcrumb-wrapper">
			
				<div class="container">
				
					<ol class="breadcrumb-list booking-step">
						<li><a href="../">Bwire Jobs</a></li>
						<li><span>Referents</span></li>
					</ol>
					
				</div>
				
			</div>
		
			
			<div class="admin-container-wrapper">

				<div class="container">
				
					<div class="GridLex-gap-15-wrappper">
					
						<div class="GridLex-grid-noGutter-equalHeight">
						
							<div class="GridLex-col-3_sm-4_xs-12">
							
								<div class="admin-sidebar">
										
									<div class="admin-user-item">
									<div class="image">	
									
										<?php 
										if ($myavatar == null) {
										print '<center><img class="img-circle autofit2" src="../images/default.jpg" title="'.$myfname.'" alt="image"  /></center>';
										}else{
										echo '<center><img class="img-circle autofit2" alt="image" title="'.$myfname.'"  src="data:image/jpeg;base64,'.base64_encode($myavatar).'"/></center>';	
										}
										?>
										</div>
										<br>
										
										
										<h4><?php echo "$myfname"; ?> <?php echo "$mylname"; ?></h4>
										<p class="user-role"><?php echo "$mytitle"; ?></p>
										
									</div>
									
									<div class="admin-user-action text-center">
									
										<a target="_blank" href="my_cv" class="btn btn-primary btn-sm btn-inverse">
											<i class="fa fa-file-text-o"></i> Voir mon CV
										</a>
										
									</div>
									
									<ul class="admin-user-menu clearfix">
										<li>
											<a href="./"><i class="fa fa-user"></i> Mon Profil</a>
										</li>
										<li class="">
										<a href="change-password.php"><i class="fa fa-key"></i> Changer le Mot de Passe</a>
										</li>
										<li  >
											<a href="qualifications.php"><i class="fa fa-trophy"></i> Qualifications Professionnelles</a>
										</li>
										<li>
											<a href="language.php"><i class="fa fa-language"></i> Compétences Linguistiques</a>
										</li>
										<li>
											<a href="training.php"><i class="fa fa-gears"></i> Formations & Ateliers</a>
										</li>
										<li class="active">
											<a href="referees.php"><i class="fa fa-users"></i> Références</a>
										</li>
										<li >
											<a href="academic.php"><i class="fa fa-graduation-cap"></i> Diplômes Académiques</a>
										</li>
										<li>
											<a href="experience.php"><i class="fa fa-briefcase"></i> Expérience Professionnelle</a>
										</li>
										<li>
											<a href="attachments.php"><i class="fa fa-folder-open"></i> Pièces Jointes</a>
										</li>
										<li>
											<a href="applied-jobs.php"><i class="fa fa-bookmark"></i> Offres Postulées</a>
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
									
										<h2><i class="fa fa-users"></i> Références</h2>
										<p><i class="fa fa-info-circle"></i> Gérez vos références professionnelles</p>
										
									</div>
									
									<!-- Formulaire d'ajout de référence -->
									<div class="referee-form-wrapper">
										<h4><i class="fa fa-plus-circle"></i> Ajouter une nouvelle référence</h4>
										<form action="app/add-referee.php" method="POST" autocomplete="off" enctype="multipart/form-data">
											<div class="row gap-20">
												<div class="col-sm-12 col-md-6">
													<div class="form-group"> 
														<label><i class="fa fa-user"></i> Nom du référent</label>
														<input class="form-control" placeholder="Entrez le nom complet du référent" type="text" name="name" required> 
													</div>
												</div>
												<div class="col-sm-12 col-md-6">
													<div class="form-group"> 
														<label><i class="fa fa-envelope"></i> Email du référent</label>
														<input class="form-control" placeholder="Entrez l'email du référent" type="email" name="email" required> 
													</div>
												</div>
												<div class="col-sm-12 col-md-6">
													<div class="form-group"> 
														<label><i class="fa fa-briefcase"></i> Titre du référent</label>
														<input class="form-control" placeholder="Entrez le titre ou poste du référent" type="text" name="title" required> 
													</div>
												</div>
												<div class="col-sm-12 col-md-6">
													<div class="form-group"> 
														<label><i class="fa fa-phone"></i> Téléphone du référent</label>
														<input class="form-control" placeholder="Entrez le numéro de téléphone" type="text" name="phone" required> 
													</div>
												</div>
												<div class="col-sm-12 col-md-12">
													<div class="form-group"> 
														<label><i class="fa fa-building"></i> Nom de l'institution</label>
														<input class="form-control" placeholder="Entrez le nom de l'entreprise ou institution" type="text" name="institution" required> 
													</div>
												</div>
											</div>
											<div class="row gap-20">
												<div class="col-sm-12">
													<button type="submit" class="btn btn-primary">
														<i class="fa fa-save"></i> Ajouter la référence
													</button>
												</div>
											</div>
										</form>
									</div>
									
									<div class="resume-list-wrapper">
									<?php require 'constants/check_reply.php'; ?>
									<?php
									require '../constants/db_config.php';
									try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                    $stmt = $conn->prepare("SELECT * FROM tbl_referees WHERE member_no = '$myid' ORDER BY id LIMIT $page1,5");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();

                                    foreach($result as $row)
                                    {
									 $refname = $row['ref_name'];
									 $refmail = $row['ref_mail'];
									 $reftitle = $row['ref_title'];
									 $refphone = $row['ref_phone'];
									 $ref_id = $row['id'];
									 $institution = $row['institution'];
									 
									 ?>
									 									<div class="referee-item">
										
											<div class="row">
											
												<div class="col-sm-12 col-md-10">
												
													<div class="content">
													
														<div class="referee-name"><?php echo "$refname"; ?></div>
														<div class="referee-position"><?php echo "$reftitle"; ?></div>
														<div class="referee-company"><?php echo $row['institution']; ?></div>
														<div class="referee-contact">
															<i class="fa fa-envelope"></i> <?php echo "$refmail"; ?><br>
															<i class="fa fa-phone"></i> <?php echo "$refphone"; ?>
														</div>
													
													</div>
												
												</div>
												
												<div class="col-sm-12 col-md-2">
													
													<div class="referee-actions">
													
														<a data-toggle="modal" href="#edit<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Modifier</a>
									<a href="app/drop-ref.php?id=<?php echo $row['id']; ?>" onclick = "return confirm('Êtes-vous sûr de vouloir supprimer cette référence ?')" class="btn btn-danger btn-sm">Supprimer</a>
									<div id="edit<?php echo $row['id']; ?>" class="modal fade login-box-wrapper" tabindex="-1" data-width="550" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
			
				                    <div class="modal-header">
					                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					                 <h4 class="modal-title text-center"><i class="fa fa-edit"></i> Modifier la référence : <?php echo "$refname"; ?></h4>
				                    </div>
				
				                    <div class="modal-body">
									<form action="app/update-ref.php" method="POST" autocomplete="off" enctype="multipart/form-data">
					                <div class="row gap-20">
									
									<div class="col-sm-6 col-md-6">
				
							        <div class="form-group"> 
								    <label><i class="fa fa-user"></i> Nom du référent</label>
								    <input class="form-control" value="<?php echo "$refname"; ?>" placeholder="Entrez le nom du référent" type="text" name="name" required> 
							        </div>
						
						             </div>
									 
								

						
						             <div class="col-sm-12 col-md-6">
						
							        <div class="form-group"> 
								    <label><i class="fa fa-envelope"></i> Email du référent</label>
								    <input class="form-control" value="<?php echo "$refmail"; ?>" placeholder="Entrez l'email du référent" type="email" name="email" required> 
							        </div>
						
						           </div>
						
						             <div class="col-sm-12 col-md-6">
						
							        <div class="form-group"> 
								    <label><i class="fa fa-briefcase"></i> Titre du référent</label>
								    <input class="form-control" value="<?php echo "$reftitle"; ?>" placeholder="Entrez le titre du référent" type="text" name="title" required> 
							        </div>
						
						           </div>
								   
						             <div class="col-sm-12 col-md-6">
						
							        <div class="form-group"> 
								    <label><i class="fa fa-phone"></i> Téléphone du référent</label>
								    <input class="form-control" value="<?php echo "$refphone"; ?>" placeholder="Entrez le téléphone du référent" type="text" name="phone" required> 
							        </div>
						
						           </div>

								   
								   	<div class="col-sm-12 col-md-12">
						
							        <div class="form-group"> 
								    <label><i class="fa fa-building"></i> Nom de l'institution</label>
								    <input class="form-control" value="<?php echo "$institution"; ?>" placeholder="Entrez le nom de l'institution" type="text" name="institution" required> 
							        </div>
					
						
					               </div>
				                   </div>
				                   </div>
				                   <input type="hidden" name="refid" value="<?php echo "$ref_id"; ?>">
				                   <div class="modal-footer text-center">
				 	               <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Mettre à jour</button>
					               <button type="button" data-dismiss="modal" class="btn btn-default"><i class="fa fa-times"></i> Annuler</button>
				                   </div>
				                   </form>
			                       </div>

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

									<div class="pager-wrapper">
								
						            <ul class="pager-list">
								<?php
								$total_records = 0;
									require '../constants/db_config.php';
									try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                    $stmt = $conn->prepare("SELECT * FROM tbl_referees WHERE member_no = '$myid' ORDER BY id");
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
								
								print '<li class="paging-nav" '; if ($page == "1") { print 'class="disabled"'; } print '><a '; if ($page == "1") { print ''; } else { print 'href="referees.php?page='.$prevpage.'"';} print '><i class="fa fa-chevron-left"></i></a></li>';
					            for ($b=1;$b<=$records;$b++)
                                 {
                                 
		                        ?><li  class="paging-nav" ><a <?php if ($b == $page) { print ' style="background-color:#33B6CB; color:white" '; } ?>  href="referees.php?page=<?php echo "$b"; ?>"><?php echo $b." "; ?></a></li><?php
                                 }	
								 print '<li class="paging-nav"'; if ($page == $records) { print 'class="disabled"'; } print '><a '; if ($page == $records) { print ''; } else { print 'href="referees.php?page='.$nextpage.'"';} print '><i class="fa fa-chevron-right"></i></a></li>';
					             }

								
								?>

						            </ul>	
					
					                </div>

										
		
										
									</div>
									
									<div class="mt-30">
									
										<a data-toggle="modal" href="#QualifModal" class="btn btn-primary btn-lg">Ajouter nouveau</a>
										
									</div>
									<div id="QualifModal" class="modal fade login-box-wrapper" tabindex="-1" data-width="550" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
			
				                    <div class="modal-header">
					                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					                 <h4 class="modal-title text-center">Ajouter un referent</h4>
				                    </div>
				
				                    <div class="modal-body">
									
									<form action="app/add-referee.php" method="POST" autocomplete="off" enctype="multipart/form-data">
					                <div class="row gap-20">
									
									<div class="col-sm-6 col-md-6">
				
							        <div class="form-group"> 
								    <label>Nom du referent</label>
								    <input class="form-control" placeholder="Entrez le nom du referent" type="text" name="name" required> 
							        </div>
						
						             </div>
									 
								

						
						             <div class="col-sm-12 col-md-6">
						
							        <div class="form-group"> 
								    <label>Email du referent</label>
								    <input class="form-control" placeholder="Entrez l'email du referent" type="email" name="email" required> 
							        </div>
						
						           </div>
						
						             <div class="col-sm-12 col-md-6">
						
							        <div class="form-group"> 
								    <label>Titre du referent</label>
								    <input class="form-control" placeholder="Entrez le titre du referent" type="text" name="title" required> 
							        </div>
						
						           </div>
								   
						             <div class="col-sm-12 col-md-6">
						
							        <div class="form-group"> 
								    <label>Telephone du referent</label>
								    <input class="form-control" placeholder="Entrez le telephone du referent" type="text" name="phone" required> 
							        </div>
						
						           </div>

								   
								   	<div class="col-sm-12 col-md-12">
						
							        <div class="form-group"> 
								    <label>Nom de l'institution</label>
								    <input class="form-control" placeholder="Entrez le nom de l'institution" type="text" name="institution" required> 
							        </div>
					
						
					               </div>
				                   </div>
				
				                   <div class="modal-footer text-center">
				 	               <button type="submit" class="btn btn-primary">Soumettre</button>
					               <button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Fermer</button>
				                   </div>
				                   </form>
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

<script type="text/javascript" src="../js/fileinput.min.js"></script>
<script type="text/javascript" src="../js/customs-fileinput.js"></script>


</body>


</html>