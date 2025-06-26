<?php // ==========================
// HEADER DU SITE (composant)
// ==========================
// Détection dynamique du chemin de base du projet
$base_url = (isset($_SERVER['SCRIPT_NAME'])) ? dirname($_SERVER['SCRIPT_NAME']) : '';
$base_url = rtrim(str_replace('\\', '/', $base_url), '/');
if ($base_url === '.' || $base_url === '/') $base_url = '';
?>
<header id="header">
    <nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function">
        <div class="container">
            <div class="logo-wrapper">
                <div class="logo">
                    <a href="/OnlineJobPortal/"><img src="/OnlineJobPortal/images/logo.png" alt="Logo" /></a>
                </div>
            </div>
            <div id="navbar" class="navbar-nav-wrapper navbar-arrow">
                <ul class="nav navbar-nav" id="responsive-menu">
                    <li><a href="/OnlineJobPortal/" style="text-transform: capitalize;">Accueil</a></li>
                    <li><a href="/OnlineJobPortal/job-list.php" style="text-transform: capitalize;">Liste des Offres</a></li>
                    <li><a href="/OnlineJobPortal/employers.php" style="text-transform: capitalize;">Employeurs</a></li>
                    <li><a href="/OnlineJobPortal/employees.php" style="text-transform: capitalize;">Employés</a></li>
                    <li><a href="/OnlineJobPortal/contact.php" style="text-transform: capitalize;">Contactez-nous</a></li>
                </ul>
            </div>
            <div class="nav-mini-wrapper">
                <ul class="nav-mini sign-in">
                <?php if (isset($user_online) && $user_online == true) {
                    print '<li><a href="/OnlineJobPortal/logout.php">deconnexion</a></li><li><a href="'.$myrole.'">Profil</a></li>';
                } else {
                    print '<li><a href="/OnlineJobPortal/login.php">connexion</a></li><li><a data-toggle="modal" href="#registerModal">inscription</a></li>';
                } ?>
                </ul>
            </div>
        </div>
        <div id="slicknav-mobile"></div>
    </nav>
    <!-- Modal d'inscription -->
    <div id="registerModal" class="modal fade login-box-wrapper" tabindex="-1" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title text-center">Creez votre compte gratuitement</h4>
        </div>
        <div class="modal-body">
            <div class="row gap-20">
                <div class="col-sm-6 col-md-6">
                    <a href="/OnlineJobPortal/register.php?p=Employer" class="btn btn-facebook btn-block mb-5-xs">S'inscrire comme Employeur</a>
                </div>
                <div class="col-sm-6 col-md-6">
                    <a href="/OnlineJobPortal/register.php?p=Employee" class="btn btn-facebook btn-block mb-5-xs">S'inscrire comme Employe</a>
                </div>
            </div>
        </div>
        <div class="modal-footer text-center">
            <button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Fermer</button>
        </div>
    </div>
</header> 