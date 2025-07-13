<!doctype html>
<html lang="en">
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

	<title>Portail Emploi - Experience professionnelle</title>
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
						<li><a href="../"></a></li>
						<li><span>Experience professionnelle</span></li>
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
										<li >
											<a href="training.php"><i class="fa fa-gears"></i> Formations & Ateliers</a>
										</li>

										<li>
											<a href="referees.php"><i class="fa fa-users"></i> Références</a>
										</li>
										<li>
											<a href="academic.php"><i class="fa fa-graduation-cap"></i> Diplômes Académiques</a>
										</li>
										<li class="active">
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
									
										<h2><i class="fa fa-briefcase"></i> Expérience Professionnelle</h2>
										<p><i class="fa fa-info-circle"></i> Gérez vos expériences professionnelles</p>
										
									</div>
									
									<!-- Formulaire d'ajout d'expérience professionnelle -->
									<div class="experience-form-wrapper">
										<h4><i class="fa fa-plus-circle"></i> Ajouter une nouvelle expérience</h4>
										<form action="app/add-experience.php" method="POST" autocomplete="off" enctype="multipart/form-data">
											<div class="row gap-20">
												<div class="col-sm-12 col-md-6">
													<div class="form-group"> 
														<label><i class="fa fa-briefcase"></i> Titre du poste</label>
														<input class="form-control" placeholder="Ex: Développeur Web Senior" type="text" name="title" required> 
													</div>
												</div>
												<div class="col-sm-12 col-md-6">
													<div class="form-group"> 
														<label><i class="fa fa-building"></i> Nom de l'entreprise</label>
														<input class="form-control" placeholder="Ex: Google Inc." type="text" name="institution" required> 
													</div>
												</div>
												<div class="col-sm-12 col-md-6">
													<div class="form-group"> 
														<label><i class="fa fa-user"></i> Superviseur</label>
														<input class="form-control" placeholder="Ex: Jean Dupont" type="text" name="supervisor" required> 
													</div>
												</div>
												<div class="col-sm-12 col-md-6">
													<div class="form-group"> 
														<label><i class="fa fa-phone"></i> Téléphone du superviseur</label>
														<input class="form-control" placeholder="Ex: +33 1 23 45 67 89" type="text" name="supervisor_phone" required> 
													</div>
												</div>
												<div class="col-sm-12 col-md-6">
													<div class="form-group"> 
														<label><i class="fa fa-calendar"></i> Date de début</label>
														<input class="form-control" placeholder="Ex: 01/01/2020" type="text" name="start_date" required> 
													</div>
												</div>
												<div class="col-sm-12 col-md-6">
													<div class="form-group"> 
														<label><i class="fa fa-calendar"></i> Date de fin</label>
														<input class="form-control" placeholder="Ex: 31/12/2023 (ou 'Présent')" type="text" name="end_date" required> 
													</div>
												</div>
												<div class="col-sm-12 col-md-12">
													<div class="form-group"> 
														<label><i class="fa fa-tasks"></i> Missions et responsabilités</label>
														<textarea class="form-control" placeholder="Décrivez vos missions, responsabilités, réalisations..." name="duties" required></textarea>
													</div>
												</div>
											</div>
											<div class="row gap-20">
												<div class="col-sm-12">
													<button type="submit" class="btn btn-primary">
														<i class="fa fa-save"></i> Ajouter l'expérience
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
                                    $stmt = $conn->prepare("SELECT * FROM tbl_experience WHERE member_no = '$myid' ORDER BY id LIMIT $page1,5");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();

                                    foreach($result as $row)
                                    {
									 $title = $row['title'];
									 $institution = $row['institution'];
									 $supervisor = $row['supervisor'];
									 $phone = $row['supervisor_phone'];
									 $start_date = $row['start_date'];
									 $end_date = $row['end_date'];
									 $duties = $row['duties'];
									 $expid = $row['id'];
									 
									 ?>
									 									<div class="experience-item">
										
											<div class="row">
											
												<div class="col-sm-12 col-md-10">
												
													<div class="content">
													
														<div class="experience-title"><?php echo "$title"; ?></div>
														<div class="experience-company"><?php echo $row['institution']; ?></div>
														<div class="experience-date"><?php echo "$start_date"; ?> à <?php echo "$end_date"; ?></div>
														<div class="experience-description">
															<?php echo substr($duties, 0, 200); ?>...
														</div>
													
													</div>
												
												</div>
												
												<div class="col-sm-12 col-md-2">
													
													<div class="experience-actions">
													
														<a data-toggle="modal" href="#edit<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Modifier</a>
									<a href="app/drop-experience.php?id=<?php echo $row['id']; ?>" onclick = "return confirm('Êtes-vous sûr de vouloir supprimer cette expérience ?')" class="btn btn-danger btn-sm">Supprimer</a>
									<div id="edit<?php echo $row['id']; ?>" class="modal fade login-box-wrapper" tabindex="-1" data-width="550" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
			
				                    <div class="modal-header">
					                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					                 <h4 class="modal-title text-center"><?php echo "$title"; ?></h4>
				                    </div>
				
				                    <div class="modal-body">
									<b style="color:#990000">Tous les champs avec * sont obligatoires</b>
									<form action="app/update-experience.php" method="POST" autocomplete="off" enctype="multipart/form-data">
					                <div class="row gap-20">
									

						            <div class="col-sm-6 col-md-6">
				
							        <div class="form-group"> 
								    <label>Nom de l'institution <b style="color:#990000">*</b></label>
								    <input value="<?php echo "$institution"; ?>" class="form-control" placeholder="Entrez le nom de l'institution" type="text" name="institution" required> 
							        </div>
						
						             </div>
									 
									 <div class="col-sm-6 col-md-6">
				
							        <div class="form-group"> 
								    <label>Nom du superviseur</label>
								    <input value="<?php echo "$supervisor"; ?>" class="form-control" placeholder="Entrez le nom du superviseur" type="text" name="supervisor"> 
							        </div>
						
						             </div>
									<div class="col-sm-6 col-md-6">
				
							        <div class="form-group"> 
								    <label>Téléphone du superviseur</label>
								    <input value="<?php echo "$phone"; ?>" class="form-control" placeholder="Entrez le numéro de téléphone du superviseur" type="text" name="telphone"> 
							        </div>
						
						             </div>
									 
									<div class="col-sm-6 col-md-6">
				
							        <div class="form-group"> 
								    <label>Titre du poste <b style="color:#990000">*</b></label>
								    <input  value="<?php echo "$title"; ?>" class="form-control" placeholder="Entrez le titre du poste" type="text" name="jobtitle" required> 
							        </div>
						
						             </div>
						
								   
								   	<div class="col-sm-6 col-md-6">
						
							        <div class="form-group"> 
								    <label>Date de début <b style="color:#990000">*</b></label>
								    <input  value="<?php echo "$start_date"; ?>" class="form-control" placeholder="Ex: 13-01-2017" type="text" name="startdate" required> 
							        </div>
						
						           </div>
								   
								   	<div class="col-sm-6 col-md-6">
						
							        <div class="form-group"> 
								    <label>Date de fin <b style="color:#990000">*</b></label>
								    <input  value="<?php echo "$end_date"; ?>" class="form-control" placeholder="Ex: 01-12-2017" type="text" name="enddate" required> 
							        </div>
						
						           </div>
                                   <input type="hidden" name="expid" value="<?php echo "$expid"; ?>">
								   	<div class="col-sm-12 col-md-12">
						
							        <div class="form-group"> 
								    <label>Fonctions et responsabilités</label>
								    <textarea class="form-control" name="duties"><?php echo "$duties"; ?> </textarea>
							        </div>
						
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
                                $stmt = $conn->prepare("SELECT * FROM tbl_experience WHERE member_no = '$myid' ORDER BY id");
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
								
								print '<li class="paging-nav" '; if ($page == "1") { print 'class="disabled"'; } print '><a '; if ($page == "1") { print ''; } else { print 'href="experience.php?page='.$prevpage.'"';} print '><i class="fa fa-chevron-left"></i></a></li>';
					            for ($b=1;$b<=$records;$b++)
                                 {
                                 
		                        ?><li  class="paging-nav" ><a <?php if ($b == $page) { print ' style="background-color:#33B6CB; color:white" '; } ?> href="experience.php?page=<?php echo "$b"; ?>"><?php echo $b." "; ?></a></li><?php
                                 }	
								 print '<li class="paging-nav"'; if ($page == $records) { print 'class="disabled"'; } print '><a '; if ($page == $records) { print ''; } else { print 'href="experience.php?page='.$nextpage.'"';} print '><i class="fa fa-chevron-right"></i></a></li>';
					             }

								
								?>

						            </ul>	
					
					                </div>

										
		
										
									</div>
									
									<div class="mt-30">
									
										<a data-toggle="modal" href="#QualifModal" class="btn btn-primary btn-lg">Ajouter</a>
										
									</div>
									<div id="QualifModal" class="modal fade login-box-wrapper" tabindex="-1" data-width="550" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
			
				                    <div class="modal-header">
					                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					                 <h4 class="modal-title text-center">Expérience professionnelle</h4>
				                    </div>
				
				                    <div class="modal-body">
									<b style="color:#990000">Tous les champs avec * sont obligatoires</b>
									<form action="app/add-experience.php" method="POST" autocomplete="off" enctype="multipart/form-data">
					                <div class="row gap-20">
									

						            <div class="col-sm-6 col-md-6">
				
							        <div class="form-group"> 
								    <label>Nom de l'institution <b style="color:#990000">*</b></label>
								    <input class="form-control" placeholder="Entrez le nom de l'institution" type="text" name="institution" required> 
							        </div>
						
						             </div>
									 
									 <div class="col-sm-6 col-md-6">
				
							        <div class="form-group"> 
								    <label>Nom du superviseur</label>
								    <input class="form-control" placeholder="Entrez le nom du superviseur" type="text" name="supervisor"> 
							        </div>
						
						             </div>
									<div class="col-sm-6 col-md-6">
				
							        <div class="form-group"> 
								    <label>Téléphone du superviseur</label>
								    <input class="form-control" placeholder="Entrez le numéro de téléphone du superviseur" type="text" name="telphone"> 
							        </div>
						
						             </div>
									 
									<div class="col-sm-6 col-md-6">
				
							        <div class="form-group"> 
								    <label>Titre du poste <b style="color:#990000">*</b></label>
								    <input class="form-control" placeholder="Entrez le titre du poste" type="text" name="jobtitle" required> 
							        </div>
						
						             </div>
						
								   
								   	<div class="col-sm-6 col-md-6">
						
							        <div class="form-group"> 
								    <label>Date de début <b style="color:#990000">*</b></label>
								    <input class="form-control" placeholder="Ex: 01 Mars 2017" type="text" name="startdate" required> 
							        </div>
						
						           </div>
								   
								   	<div class="col-sm-6 col-md-6">
						
							        <div class="form-group"> 
								    <label>Date de fin <b style="color:#990000">*</b></label>
								    <input class="form-control" placeholder="Ex: 01 Juin 2017" type="text" name="enddate" required> 
							        </div>
						
						           </div>

								   	<div class="col-sm-12 col-md-12">
						
							        <div class="form-group"> 
								    <label>Fonctions et responsabilités</label>
								    <textarea class="form-control"  name="duties"> </textarea>
							        </div>
						
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