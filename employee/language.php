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

	<title>Portail Emploi - Competences linguistiques</title>
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
	<link href="../css/employee-profile-cv.css" rel="stylesheet">
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
						<li><a href="../">Accueil</a></li>
						<li><span>Competences linguistiques</span></li>
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
										<li class="active">
											<a href="language.php"><i class="fa fa-language"></i> Compétences Linguistiques</a>
										</li>
										<li>
											<a href="training.php"><i class="fa fa-gears"></i> Formations & Ateliers</a>
										</li>
										<li>
											<a href="referees.php"><i class="fa fa-users"></i> Références</a>
										</li>
										<li>
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
									
										<h2><i class="fa fa-language"></i> Compétences Linguistiques</h2>
										<p><i class="fa fa-info-circle"></i> Gérez vos compétences en langues étrangères</p>
										
									</div>
									
									<div class="resume-list-wrapper">
									<?php require 'constants/check_reply.php'; ?>
									<?php
									require '../constants/db_config.php';
									try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                    $stmt = $conn->prepare("SELECT * FROM tbl_language WHERE member_no = '$myid' ORDER BY id LIMIT $page1,5");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();

                                    foreach($result as $row)
                                    {
										?>
											<div class="resume-list-item">
										
											<div class="row">
											
												<div class="col-sm-12 col-md-10">
												
													<div class="content">
													
														<a >

															<div class="image">
															<?php 
										                    if ($myavatar == null) {
									                    	print '<center><img src="../images/default.jpg" title="'.$myfname.'" alt="image" width="100" height="100" /></center>';
										                    }else{
										                    echo '<center><img alt="image" title="'.$myfname.'" width="100" height="100" src="data:image/jpeg;base64,'.base64_encode($myavatar).'"/></center>';	
										                    }
										                      ?>
															</div>
															
															<h4><?php echo $row['language']; ?></h4>
															
															<div class="row">
																<div class="col-sm-12 col-md-12">
																	<i class="fa fa-user mr-5"></i> Parler - <strong class="mr-10"><?php echo $row['speak']; ?></strong> <i class="fa fa-book mr-5"></i> Lire - <strong class="mr-10"><?php echo $row['reading']; ?></strong> <i class="fa fa-pencil mr-5"></i> Ecrire - <strong class="mr-10"><?php echo $row['writing']; ?></strong>
																</div>

															</div>

														</a>
													
													</div>
												
												</div>
												
												<div class="col-sm-12 col-md-2">
													
													<div class="resume-list-btn">
													
														<a data-toggle="modal" href="#edit<?php echo $row['id']; ?>" class="btn btn-primary btn-sm mb-5 mb-0-sm">Editer</a>
														<a href="app/drop-language.php?id=<?php echo $row['id']; ?>" onclick = "return confirm('Etes-vous sur de vouloir supprimer cette langue ?')" class="btn btn-primary btn-sm btn-inverse">Supprimer</a>
														
														<div id="edit<?php echo $row['id']; ?>" class="modal fade login-box-wrapper" tabindex="-1" data-width="550" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
			
				                                        <div class="modal-header">
					                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					                                    <h4 class="modal-title text-center">Editer - <?php echo $row['language']; ?></h4>
				                                        </div>
				
				                                        <div class="modal-body">
									                    <form action="app/update-language.php" method="POST" autocomplete="off" enctype="multipart/form-data">
					                                    <div class="row gap-20">
						                                <div class="col-sm-12 col-md-12">
				
							                            <div class="form-group"> 
								                        <label>Langue</label>
								                        <input class="form-control" value="<?php echo $row['language']; ?>" placeholder="Entrez le nom de la langue" type="text" name="language" required> 
							                            </div>
						
						                                </div>

						
						                                <div class="col-sm-12 col-md-12">
				
							                            <div class="form-group"> 
								                        <label>Parler</label>
								                        <select name="speak" required class="selectpicker show-tick form-control" data-live-search="false">
									                    <option <?php if ($row ['speak'] == "Fair") { print ' selected '; } ?> value="Fair">Passable</option>
									                    <option <?php if ($row ['speak'] == "Good") { print ' selected '; } ?> value="Good">Bien</option>
								                    	<option <?php if ($row ['speak'] == "Very Good") { print ' selected '; } ?> value="Very Good">Tres bien</option>
									                    </select>
							                            </div>
						
						                               </div>
						
						                                <div class="col-sm-12 col-md-12">
				
							                            <div class="form-group"> 
								                        <label>Lire</label>
								                        <select name="read" required class="selectpicker show-tick form-control" data-live-search="false">
									                    <option <?php if ($row ['reading'] == "Fair") { print ' selected '; } ?> value="Fair">Passable</option>
									                    <option <?php if ($row ['reading'] == "Good") { print ' selected '; } ?> value="Good">Bien</option>
								                    	<option <?php if ($row ['reading'] == "Very Good") { print ' selected '; } ?> value="Very Good">Tres bien</option>
									                    </select>
							                            </div>
						
						                               </div>

						                                <div class="col-sm-12 col-md-12">
				
							                            <div class="form-group"> 
								                        <label>Ecrire</label>
								                        <select name="write" required class="selectpicker show-tick form-control" data-live-search="false">
									                    <option <?php if ($row ['writing'] == "Fair") { print ' selected '; } ?> value="Fair">Passable</option>
									                    <option <?php if ($row ['writing'] == "Good") { print ' selected '; } ?> value="Good">Bien</option>
								                    	<option <?php if ($row ['writing'] == "Very Good") { print ' selected '; } ?> value="Very Good">Tres bien</option>
									                    </select>
							                            </div>
						
						                               </div>
						
					                                  </div>
				                                      </div>
				                                       <input type="hidden" name="langid" value="<?php echo $row['id']; ?>">
				                                       <div class="modal-footer text-center">
				 	                                   <button type="submit" class="btn btn-primary">Mettre a jour</button>
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
                                    $stmt = $conn->prepare("SELECT * FROM tbl_language WHERE member_no = '$myid' ORDER BY id");
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
								
								print '<li class="paging-nav" '; if ($page == "1") { print 'class="disabled"'; } print '><a '; if ($page == "1") { print ''; } else { print 'href="language.php?page='.$prevpage.'"';} print '><i class="fa fa-chevron-left"></i></a></li>';
					            for ($b=1;$b<=$records;$b++)
                                 {
                                 
		                        ?><li  class="paging-nav"><a <?php if ($b == $page) { print ' style="background-color:#33B6CB; color:white" '; } ?>  href="language.php?page=<?php echo "$b"; ?>"><?php echo $b." "; ?></a></li><?php
                                 }	
								 print '<li class="paging-nav"'; if ($page == $records) { print 'class="disabled"'; } print '><a '; if ($page == $records) { print ''; } else { print 'href="language.php?page='.$nextpage.'"';} print '><i class="fa fa-chevron-right"></i></a></li>';
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
					                 <h4 class="modal-title text-center">Ajouter des langues</h4>
				                    </div>
				
				                    <div class="modal-body">
									<form action="app/add-language.php" method="POST" autocomplete="off" enctype="multipart/form-data">
					                <div class="row gap-20">
						            <div class="col-sm-12 col-md-12">
				
							        <div class="form-group"> 
								    <label>Langue</label>
								    <input class="form-control" placeholder="Entrez le nom de la langue" type="text" name="language" required> 
							        </div>
						
						             </div>

						
						            <div class="col-sm-12 col-md-12">
				
							        <div class="form-group"> 
								    <label>Parler</label>
								    <select name="speak" required class="selectpicker show-tick form-control" data-live-search="false">
									<option value="Fair">Passable</option>
									<option value="Good">Bien</option>
									<option value="Very Good">Tres bien</option>
									</select>
							        </div>
						
						             </div>
						
						            <div class="col-sm-12 col-md-12">
				
							        <div class="form-group"> 
								    <label>Lire</label>
								    <select name="read" required class="selectpicker show-tick form-control" data-live-search="false">
									<option value="Fair">Passable</option>
									<option value="Good">Bien</option>
									<option value="Very Good">Tres bien</option>
									</select>
							        </div>
						
						             </div>

						            <div class="col-sm-12 col-md-12">
				
							        <div class="form-group"> 
								    <label>Ecrire</label>
								    <select name="write" required class="selectpicker show-tick form-control" data-live-search="false">
									<option value="Fair">Passable</option>
									<option value="Good">Bien</option>
									<option value="Very Good">Tres bien</option>
									</select>
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