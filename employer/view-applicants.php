<!doctype html>
<html lang="fr">
<?php 
require '../constants/settings.php'; 
require 'constants/check-login.php';

if (isset($_GET['page'])) {
$page = $_GET['page'];
if ($page=="" || $page=="1")
{
$page1 = 0;
$page = 1;
}else{
$page1 = ($page*16)-16;
}					
}else{
$page1 = 0;
$page = 1;	
}

if ($user_online == "true") {
if ($myrole == "employer") {
}else{
header("location:../");		
}
}else{
header("location:../");	
}

if (isset($_GET['jobid'])) {
require'../constants/db_config.php';
$job_id = $_GET['jobid'];

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
$stmt = $conn->prepare("SELECT * FROM tbl_jobs WHERE job_id = :jobid AND company = '$myid'");
$stmt->bindParam(':jobid', $job_id);
$stmt->execute();
$result = $stmt->fetchAll();
$rec = count($result);

if ($rec == "0") {
header("location:../");		
}else{

foreach($result as $row)
{
		
$job_title = $row['title'];
}
	
}
					  
}catch(PDOException $e)
{

}
	
}
?>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> - Candidats pour le poste <?php echo "$job_title"; ?></title>
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
	<link rel="stylesheet" href="../icons/simple-line-icons/simple-line-icons.html">
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

  <style>
  
    .autofit2 {
	height:63px;
	width:63px;
    object-fit:cover; 
  }
  
  </style>

<body class="not-transparent-header">

	<div class="container-wrapper">

		<?php include '../components/header.php'; ?>

		<div class="main-wrapper employer-common-wrapper">

			<div class="breadcrumb-wrapper">
			
				<div class="container">
				
					<ol class="breadcrumb-list booking-step">
						<li><a href="./"><i class="fa fa-home"></i> Accueil</a></li>
						<li><span><i class="fa fa-users"></i> Candidats pour le poste "<?php echo "$job_title"; ?>"</span></li>
					</ol>
					
				</div>
				
			</div>
			
			<div class="section sm">
			
				<div class="container">
				
					<div class="sorting-wrappper">
			
						<div class="sorting-header">
							<h3 class="sorting-title"><i class="fa fa-users"></i> Candidats pour le poste "<?php echo "$job_title"; ?>"</h3>
						</div>
						
		
					</div>
					
					<div class="employee-grid-wrapper">
					
						<div class="GridLex-gap-15-wrappper">
						
							<div class="GridLex-grid-noGutter-equalHeight">
							<?php
							include '../constants/db_config.php';
							$stmt = $conn->prepare("SELECT * FROM tbl_job_applications WHERE job_id = :jobid ORDER BY id LIMIT $page1,16");
							$stmt->bindParam(':jobid', $job_id);
                            $stmt->execute();
                            $result = $stmt->fetchAll();
							 foreach($result as $row)
                            {
							$post_date = date_format(date_create_from_format('m/d/Y', $row['application_date']), 'd');
                            $post_month = date_format(date_create_from_format('m/d/Y', $row['application_date']), 'F');
                            $post_year = date_format(date_create_from_format('m/d/Y', $row['application_date']), 'Y');
                            $emp_id = $row['member_no'];
							
							$stmtb = $conn->prepare("SELECT * FROM tbl_users WHERE role = 'employee' AND member_no = '$emp_id'");
                            $stmtb->execute();
                            $resultb = $stmtb->fetchAll();
							
							foreach ($resultb as $rowb)
							
							{
								$empavatar = $rowb['avatar'];
								
								
								?>
									<div class="GridLex-col-3_sm-4_xs-6_xss-12">
								
									<div class="employee-grid-item">
									
										<div class="action">
												
											<div class="row gap-10">
											
												<div class="col-xs-6 col-sm-6">
													<div class="text-left">
														<button class="btn" title="Ajouter aux favoris"><i class="fa fa-heart"></i></button> 
													</div>
												</div>
												
												<div class="col-xs-6 col-sm-6">
													<div class="text-right">
														<a class="btn text-right" href="../employee-detail.php?empid=<?php echo $rowb['member_no']; ?>" title="Voir le profil complet"><i class="fa fa-eye"></i></a> 
													</div>
												</div>
												
											</div>
											
										</div>
										
										<a target="_blank" href="../employee-detail.php?empid=<?php echo $rowb['member_no']; ?>" class="clearfix">
											
											<div class="image clearfix">
										    <?php 
										    if ($empavatar == null) {
									        print '<center><img class="img-circle autofit2" src="../images/default.jpg" alt="image"  /></center>';
										    }else{
										    echo '<center><img class="img-circle autofit2" alt="image" src="data:image/jpeg;base64,'.base64_encode($empavatar).'"/></center>';	
										    }
										    ?>
											
							

											</div>
											
											<div class="content">
											
												<h4><?php echo $rowb['first_name'] ?> <?php echo $rowb['last_name'] ?></h4>
												<p class="location"><i class="fa fa-map-marker"></i> <?php echo $rowb['country'] ?></p>
												
												<h6 class="text-primary"><i class="fa fa-graduation-cap"></i> <?php echo $rowb['education'] ?></h6>
												
                                                <h6 class="text-primary"><i class="fa fa-briefcase"></i> <?php echo $rowb['title'] ?></h6>
												<p class="application-date"><i class="fa fa-calendar"></i> Candidature du <?php echo "$post_date"; ?> <?php echo "$post_month"; ?> <?php echo "$post_year"; ?></p>
												
											</div>
										
										</a>
										
									</div>
								
								</div>
								
								
								<?php
								
								
							}
		

	                        }
	

							?>
							

								

								
							</div>
						
						</div>

					</div>
					
									<div class="pager-wrapper">
								
						            <ul class="pager-list">
								<?php
								$total_records = 0;
								$stmt = $conn->prepare("SELECT * FROM tbl_job_applications WHERE job_id = :jobid ORDER BY id");
								$stmt->bindParam(':jobid', $job_id);
                                $stmt->execute();
                                $result = $stmt->fetchAll();
								    foreach($result as $row)
                                {
									$total_records++;
		
	                            }

								$records = $total_records/16;
                                $records = ceil($records);
				                if ($records > 1 ) {
								$prevpage = $page - 1;
								$nextpage = $page + 1;
								
								print '<li class="paging-nav" '; if ($page == "1") { print 'class="disabled"'; } print '><a '; if ($page == "1") { print ''; } else { print 'href="view-applicants.php?jobid='.$job_id.'&page='.$prevpage.'"';} print '><i class="fa fa-chevron-left"></i></a></li>';
					            for ($b=1;$b<=$records;$b++)
                                 {
                                 
		                        ?><li  class="paging-nav" ><a <?php if ($b == $page) { print ' style="background-color:#33B6CB; color:white" '; } ?>  href="view-applicants.php?jobid=<?php echo "$job_id"; ?>&page=<?php echo "$b"; ?>"><?php echo $b." "; ?></a></li><?php
                                 }	
								 print '<li class="paging-nav"'; if ($page == $records) { print 'class="disabled"'; } print '><a '; if ($page == $records) { print ''; } else { print 'href="view-applicants.php?jobid='.$job_id.'&page='.$nextpage.'"';} print '><i class="fa fa-chevron-right"></i></a></li>';
					             }

								
								?>

						            </ul>	
					
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