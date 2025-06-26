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

	<title>Portail Emploi - Diplomes academiques</title>
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
						<li><span>Diplomes academiques</span></li>
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
									
										<a target="_blank" href="my_cv" class="btn btn-primary btn-sm btn-inverse">Voir mon CV</a>
										
									</div>
									
									<ul class="admin-user-menu clearfix">
										<li>
											<a href="./"><i class="fa fa-user"></i> Profil</a>
										</li>
										<li class="">
										<a href="change-password.php"><i class="fa fa-key"></i> Changer le mot de passe</a>
										</li>
										<li  >
											<a href="qualifications.php"><i class="fa fa-trophy"></i> Qualifications professionnelles</a>
										</li>
										<li>
											<a href="language.php"><i class="fa fa-language"></i> Competences linguistiques</a>
										</li>
										<li>
											<a href="training.php"><i class="fa fa-gears"></i> Formations & Ateliers</a>
										</li>
										<li>
											<a href="referees.php"><i class="fa fa-users"></i> Referents</a>
										</li>
										<li class="active">
											<a href="academic.php"><i class="fa fa-graduation-cap"></i> Diplomes academiques</a>
										</li>
										<li>
											<a href="experience.php"><i class="fa fa-briefcase"></i> Experience professionnelle</a>
										</li>
										<li>
											<a href="attachments.php"><i class="fa fa-folder-open"></i> Autres pieces jointes</a>
										</li>
										<li>
											<a href="applied-jobs.php"><i class="fa fa-bookmark"></i> Offres postulees</a>
										</li>
										<li>
											<a href="../logout.php"><i class="fa fa-sign-out"></i> Deconnexion</a>
										</li>
									</ul>
									
								</div>

							</div>
							
							<div class="GridLex-col-9_sm-8_xs-12">
							
								<div class="admin-content-wrapper">

									<div class="admin-section-title">
									
										<h2>Diplômes académiques</h2>
					
										
									</div>
									
									<div class="resume-list-wrapper">
									<?php require 'constants/check_reply.php'; ?>
									<?php
									require '../constants/db_config.php';
									
									try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                    $stmt = $conn->prepare("SELECT * FROM tbl_academic_qualification WHERE member_no = '$myid' ORDER BY id LIMIT $page1,5");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();
                                    foreach($result as $row)
                                    {
									 $ccountry = $row['country'];
									 $institution = $row['institution'];
									 $course = $row['course'];
									 $timeframe = $row['timeframe'];
									 $course_id = $row['id'];
									 $level = $row['level'];
									 
									 ?>
									 									<div class="resume-list-item">
										
											<div class="row">
											
												<div class="col-sm-12 col-md-10">
												
													<div class="content">
													
														<a  target="_blank" href="view-certificate-c.php?id=<?php echo $row['id']; ?>" >

															<div class="image">
															<?php 
										                    if ($myavatar == null) {
									                    	print '<center><img src="../images/default.jpg" title="'.$myfname.'" alt="image" width="100" height="100" /></center>';
										                    }else{
										                    echo '<center><img alt="image" title="'.$myfname.'" width="100" height="100" src="data:image/jpeg;base64,'.base64_encode($myavatar).'"/></center>';	
										                    }
										                      ?>
															</div>
															
															<h4><?php echo $row['course']; ?></h4>
															
															<div class="row">
																<div class="col-sm-12 col-md-9">
																	<i class="fa fa-graduation-cap text-primary mr-5"></i><strong class="mr-10"><?php echo $row['institution']; ?></strong> <i class="fa fa-map-marker text-primary mr-5"></i> <?php echo $row['country']; ?>.
																</div>
																<div class="col-sm-12 col-md-3 mt-10-sm">
																	<i class="fa fa-calendar  text-primary mr-5"></i> <?php echo $row['timeframe']; ?>
																</div>
															</div>

														</a>
													
													</div>
												
												</div>
												
												<div class="col-sm-12 col-md-2">
													
													<div class="resume-list-btn">
													
														<a data-toggle="modal" href="#edit<?php echo $row['id']; ?>" class="btn btn-primary btn-sm mb-5 mb-0-sm">Modifier</a>
									<a href="app/drop-academic.php?id=<?php echo $row['id']; ?>" onclick = "return confirm('Êtes-vous sûr de vouloir supprimer cette qualification ?')" class="btn btn-primary btn-sm btn-inverse">Supprimer</a>
									<div id="edit<?php echo $row['id']; ?>" class="modal fade login-box-wrapper" tabindex="-1" data-width="550" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
			
				                    <div class="modal-header">
					                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					                 <h4 class="modal-title text-center"><?php echo "$course"; ?></h4>
				                    </div>
				
				                    <div class="modal-body">
									<form action="app/update-academic-qualification.php" method="POST" autocomplete="off" enctype="multipart/form-data">
					                <div class="row gap-20">
									<div class="col-sm-12 col-md-12">
												
									<div class="form-group">
									<label>Niveau d'éducation</label>
									<select name="level" required class="selectpicker show-tick form-control" data-live-search="false">
									<option disabled value="">Sélectionner</option>
									<option <?php if ($level == "Diplôme avancé") { print ' selected '; } ?> value="Diplôme avancé">Diplôme avancé</option>
                                    <option <?php if ($level == "Niveau avancé (ACSE)") { print ' selected '; } ?>  value="Niveau avancé (ACSE)">Niveau avancé (ACSE)</option>
                                    <option <?php if ($level == "Certificat") { print ' selected '; } ?>  value="Certificat">Certificat</option>
                                    <option <?php if ($level == "Diplôme") { print ' selected '; } ?>  value="Diplôme">Diplôme</option>
                                    <option <?php if ($level == "Diplôme de maîtrise") { print ' selected '; } ?>  value="Diplôme de maîtrise">Diplôme de maîtrise</option>
                                    <option <?php if ($level == "Niveau ordinaire (CSE)") { print ' selected '; } ?>  value="Niveau ordinaire (CSE)">Niveau ordinaire (CSE)</option>
                                    <option <?php if ($level == "PHd") { print ' selected '; } ?>  value="PHd">PHd</option>
                                    <option <?php if ($level == "Diplôme d'études supérieures") { print ' selected '; } ?>  value="Diplôme d'études supérieures">Diplôme d'études supérieures</option>
						         
									</select>
									</div>
													
									</div>
									<div class="col-sm-12 col-md-6">
												
									<div class="form-group">
									<label>Pays</label>
									<select name="country" required class="selectpicker show-tick form-control" data-live-search="true">
									<option disabled value="">Sélectionner</option>
						            <?php
									$stmtb = $conn->prepare("SELECT * FROM tbl_countries ORDER BY country_name");
                                    $stmtb->execute();
                                    $resultb = $stmtb->fetchAll();

                                    foreach($resultb as $rowb)
                                    {
										?>
										<option <?php if ($ccountry == $rowb['country_name']) { print ' selected '; } ?> value="<?php echo $rowb['country_name']; ?>"><?php echo $rowb['country_name']; ?></option>
										<?php
		
	                                }

                                   
									 ?>
									</select>
									</div>
													
									</div>

						
						            <div class="col-sm-12 col-md-6">
				
							        <div class="form-group"> 
								    <label>Nom de l'institution</label>
								    <input class="form-control" placeholder="Entrez le nom de l'institution" type="text" name="institution" required> 
							        </div>
						
						             </div>
						
						             <div class="col-sm-12 col-md-6">
						
							        <div class="form-group"> 
								    <label>Titre du cours</label>
								    <input class="form-control" placeholder="Entrez le nom du cours" type="text" name="course" required> 
							        </div>
						
						           </div>
								   
								   	<div class="col-sm-12 col-md-6">
						
							        <div class="form-group"> 
								    <label>Période</label>
								    <input class="form-control" placeholder="Ex: 2015 à 2016" type="text" name="timeframe" required> 
							        </div>
						
						           </div>

								   	<div class="col-sm-12 col-md-6">
						
							        <div class="form-group"> 
								    <label>Certificat <i>(Laissez vide si vous ne voulez pas mettre à jour)</i></label>
								    <input class="form-control" accept="application/pdf" type="file" name="certificate"> 
							        </div>
						
						           </div>
								   	<div class="col-sm-12 col-md-6">
						
							        <div class="form-group"> 
								    <label>Transcription <i>(Laissez vide si vous ne voulez pas mettre à jour)</i></label>
								    <input class="form-control" accept="application/pdf" type="file" name="transcript"> 
							        </div>
						
						           </div>
						
					               </div>
				                   </div>
				                   <input type="hidden" name="courseid" value="<?php echo "$course_id"; ?>">
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
                                $stmt = $conn->prepare("SELECT * FROM tbl_academic_qualification WHERE member_no = '$myid' ORDER BY id");
                                $stmt->execute();
                                $result = $stmt->fetchAll();

                                foreach($result as $row)
                                {
		                        $total_records++;
 
                               	}

					  
	                            }catch(PDOException $e)
                                {
                                echo "La connexion a échoué: " . $e->getMessage();
                                }
	
								$records = $total_records/5;
                                $records = ceil($records);
				                if ($records > 1 ) {
								$prevpage = $page - 1;
								$nextpage = $page + 1;
								
								print '<li class="paging-nav" '; if ($page == "1") { print 'class="disabled"'; } print '><a '; if ($page == "1") { print ''; } else { print 'href="academic.php?page='.$prevpage.'"';} print '><i class="fa fa-chevron-left"></i></a></li>';
					            for ($b=1;$b<=$records;$b++)
                                 {
                                 
		                        ?><li  class="paging-nav" ><a <?php if ($b == $page) { print ' style="background-color:#33B6CB; color:white" '; } ?> href="academic.php?page=<?php echo "$b"; ?>"><?php echo $b." "; ?></a></li><?php
                                 }	
								 print '<li class="paging-nav"'; if ($page == $records) { print 'class="disabled"'; } print '><a '; if ($page == $records) { print ''; } else { print 'href="academic.php?page='.$nextpage.'"';} print '><i class="fa fa-chevron-right"></i></a></li>';
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
					                 <h4 class="modal-title text-center">Ajouter des qualifications académiques</h4>
				                    </div>
				
				                    <div class="modal-body">
									<form action="app/add-academic-qualification.php" method="POST" autocomplete="off" enctype="multipart/form-data">
					                <div class="row gap-20">
									<div class="col-sm-12 col-md-12">
												
									<div class="form-group">
									<label>Niveau d'éducation</label>
									<select name="level" required class="selectpicker show-tick form-control" data-live-search="false">
									<option disabled value="">Sélectionner</option>
									<option value="Diplôme avancé">Diplôme avancé</option>
                                    <option value="Niveau avancé (ACSE)">Niveau avancé (ACSE)</option>
                                    <option value="Certificat">Certificat</option>
                                    <option value="Diplôme">Diplôme</option>
                                    <option value="Diplôme de maîtrise">Diplôme de maîtrise</option>
                                    <option value="Niveau ordinaire (CSE)">Niveau ordinaire (CSE)</option>
                                    <option value="PHd">PHd</option>
                                    <option value="Diplôme d'études supérieures">Diplôme d'études supérieures</option>
						         
									</select>
									</div>
													
									</div>
									
									<div class="col-sm-6 col-md-6">
												
									<div class="form-group">
									<label>Pays</label>
									<select name="country" required class="selectpicker show-tick form-control" data-live-search="true">
									<option disabled value="">Sélectionner</option>
						            <?php
									$stmtb = $conn->prepare("SELECT * FROM tbl_countries ORDER BY country_name");
                                    $stmtb->execute();
                                    $resultb = $stmtb->fetchAll();

                                    foreach($resultb as $rowb)
                                    {
										?>
										<option <?php if ($ccountry == $rowb['country_name']) { print ' selected '; } ?> value="<?php echo $rowb['country_name']; ?>"><?php echo $rowb['country_name']; ?></option>
										<?php
		
	                                }

                                   
									 ?>
									</select>
									</div>
													
									</div>

						
						            <div class="col-sm-6 col-md-6">
				
							        <div class="form-group"> 
								    <label>Nom de l'institution</label>
								    <input class="form-control" placeholder="Entrez le nom de l'institution" type="text" name="institution" required> 
							        </div>
						
						             </div>
						
						             <div class="col-sm-12 col-md-6">
						
							        <div class="form-group"> 
								    <label>Titre du cours</label>
								    <input class="form-control" placeholder="Entrez le nom du cours" type="text" name="course" required> 
							        </div>
						
						           </div>
								   
								   	<div class="col-sm-12 col-md-6">
						
							        <div class="form-group"> 
								    <label>Période</label>
								    <input class="form-control" placeholder="Ex: 2015 à 2016" type="text" name="timeframe" required> 
							        </div>
						
						           </div>

								   	<div class="col-sm-12 col-md-6">
						
							        <div class="form-group"> 
								    <label>Certificat <i>(Laissez vide si vous ne voulez pas mettre à jour)</i></label>
								    <input class="form-control" accept="application/pdf" type="file" name="certificate"> 
							        </div>
						
						           </div>
								   	<div class="col-sm-12 col-md-6">
						
							        <div class="form-group"> 
								    <label>Transcription <i>(Laissez vide si vous ne voulez pas mettre à jour)</i></label>
								    <input class="form-control" accept="application/pdf" type="file" name="transcript"> 
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