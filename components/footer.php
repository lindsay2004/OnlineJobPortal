<?php // ==========================
// FOOTER DU SITE (composant) - Version élégante et compacte
// ==========================
?>
<footer class="footer-wrapper majestic-footer-fusion">
    <div class="container">
        <!-- Section principale du footer -->
        <div class="row g-4">
            <!-- À propos - Colonne compacte -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-section">
                    <h6 class="footer-title mb-3">À propos</h6>
                    <p class="footer-text">Portail d'emploi innovant développé par Groupe 65 pour connecter talents et opportunités.</p>
                </div>
            </div>
            
            <!-- Navigation rapide - Colonne avec plus d'espace -->
            <div class="col-lg-4 col-md-6">
                <div class="footer-section">
                    <h6 class="footer-title mb-3">Navigation</h6>
                    <ul class="footer-links-list">
                        <li><a href="./" class="footer-link">Accueil</a></li>
                        <li><a href="job-list.php" class="footer-link">Offres d'emploi</a></li>
                        <li><a href="employers.php" class="footer-link">Employeurs</a></li>
                        <li><a href="employees.php" class="footer-link">Candidats</a></li>
                        <li><a href="contact.php" class="footer-link">Contact</a></li>
                        <li><a href="#" class="footer-link scroll-top">Retour en haut</a></li>
                    </ul>
                </div>
            </div>
            
            <!-- Contact - Colonne compacte -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-section">
                    <h6 class="footer-title mb-3">Contact</h6>
                    <div class="footer-contact">
                        <div class="contact-item">
                            <i class="ri ri-map-pin-line me-2"></i>
                            <span>IUT de Douala</span>
                        </div>
                        <div class="contact-item">
                            <i class="ri ri-mail-line me-2"></i>
                            <a href="mailto:nightingale.nath2@gmail.com">Jobnight@gmail.com</a>
                        </div>
                        <div class="contact-item">
                            <i class="ri ri-phone-line me-2"></i>
                            <a href="tel:+237655454001">+237 655454001</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Réseaux sociaux - Colonne compacte -->
            <div class="col-lg-2 col-md-6">
                <div class="footer-section">
                    <h6 class="footer-title mb-3">Suivez-nous</h6>
                    <div class="social-links">
                        <a href="<?php echo isset($tw) ? $tw : '#'; ?>" class="social-link" title="Twitter">
                            <i class="ri ri-twitter-fill"></i>
                        </a>
                        <a href="<?php echo isset($fb) ? $fb : '#'; ?>" class="social-link" title="Facebook">
                            <i class="ri ri-facebook-fill"></i>
                        </a>
                        <a href="<?php echo isset($ig) ? $ig : '#'; ?>" class="social-link" title="Instagram">
                            <i class="ri ri-instagram-fill"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Séparateur élégant -->
        <div class="footer-divider my-4"></div>
        
        <!-- Barre de copyright compacte -->
        <div class="footer-bottom">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="copyright-text">&copy; <?php echo date('Y'); ?> IUT de Douala. Tous droits réservés.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="developer-text">Développé avec ❤️ par <strong>Groupe 65</strong></p>
                </div>
            </div>
        </div>
    </div>
</footer>