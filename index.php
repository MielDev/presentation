<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Épicerie Solidaire Étudiante du Mans | Aide Alimentaire Étudiants</title>
    <meta name="description"
        content="L'Épicerie Solidaire Étudiante du Mans propose une aide alimentaire aux étudiants en situation de précarité. Située au 16 Boulevard Charles Nicolle, nous vous accueillons pour vous accompagner.">
    <meta name="keywords"
        content="Kadmiel TOGNON, épicerie solidaire, aide alimentaire, étudiants, Le Mans, 72000, précarité étudiante, alimentation, solidarité, épicerie sociale">
    <meta name="author" content="Kadmiel TOGNON - Développeur du site de l'Épicerie Solidaire Étudiante du Mans">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="FR-72">
    <meta name="geo.placename" content="Le Mans">
    <meta name="geo.position" content="48.0077;0.1984">
    <meta name="ICBM" content="48.0077, 0.1984">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <meta name="theme-color" content="#4E9667">
    <link rel="canonical" href="https://www.episoletudiantedumans.fr/">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="logo.png">
    <link rel="apple-touch-icon" href="logo.png">
    <link rel="shortcut icon" href="logo.png" type="image/png">
    <meta name="msapplication-TileImage" content="logo.png">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.episoletudiantedumans.fr/">
    <meta property="og:title" content="Épicerie Solidaire Étudiante du Mans | Aide Alimentaire">
    <meta property="og:description"
        content="Aide alimentaire pour les étudiants en situation de précarité au Mans. Rejoignez-nous !">
    <meta property="og:image" content="https://www.episoletudiantedumans.fr/images/og-image.jpg">
    <meta property="og:site_name" content="Épicerie Solidaire Étudiante du Mans">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Épicerie Solidaire Étudiante du Mans">
    <meta name="twitter:description" content="Aide alimentaire pour les étudiants en situation de précarité au Mans.">
    <meta name="twitter:image" content="https://www.episoletudiantedumans.fr/images/twitter-card.jpg">

    <!-- Données structurées -->
    <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "NGO",
    "name": "Épicerie Solidaire Étudiante du Mans",
    "description": "Aide alimentaire pour les étudiants en situation de précarité au Mans. Site web développé par Kadmiel TOGNON.",
    "url": "https://www.episoletudiantedumans.fr",
    "logo": "https://www.episoletudiantedumans.fr/logo.png",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "16 Boulevard Charles Nicolle",
      "addressLocality": "Le Mans",
      "postalCode": "72000",
      "addressCountry": "FR"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": "48.0077",
      "longitude": "0.1984"
    },
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+33-7-6954-2681",
      "contactType": "customer service",
      "email": "episoldumans@gmail.com",
      "availableLanguage": ["French"]
    },
    "sameAs": [
      "https://www.facebook.com/epiceriesocialeuniversitedumans/",
      "https://www.instagram.com/episol72/"
    ]
  }
  </script>

    <!-- Préchargement des polices et ressources -->
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css?v=1" type="text/css">
</head>

<body>
    <header class="header">
        <nav class="nav-container">
            <div class="logo">
                <img src="logo.png" alt="Logo Épicerie Solidaire" class="logo-img">
                <span>Épicerie Solidaire</span>
            </div>
            <ul class="nav-menu">
                <li><a href="#accueil">Accueil</a></li>
                <li><a href="#presentation">Présentation</a></li>
                <li><a href="#equipe">L'équipe</a></li>
                <li><a href="#rejoindre">Nous rejoindre</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#partenaires">Partenaires</a></li>
            </ul>
            <div class="auth-buttons">
                <a href="https://app.episoletudiantedumans.fr" class="btn btn-login">Connexion</a>
                <a href="https://app.episoletudiantedumans.fr" class="btn btn-register">Inscription</a>
            </div>
            <div class="burger" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>

    <section class="hero" id="accueil">
        <h1>Épicerie Solidaire Étudiante du Mans</h1>
        <p>Une épicerie solidaire pour les étudiants, par des étudiants</p>
        <div class="hero-buttons">
            <a href="#presentation" class="btn btn-primary">Découvrir notre mission</a>
            <a href="#rejoindre" class="btn btn-secondary">Nous rejoindre</a>
            <div class="hero-auth-buttons">
                <p>Déjà membre ?</p>
                <a href="https://app.episoletudiantedumans.fr" class="btn btn-login">Prendre un RDV</a>
                <p>ou</p>
                <a href="https://app.episoletudiantedumans.fr" class="btn btn-register">Créer un
                    compte</a>
            </div>
        </div>
    </section>

    <section class="section" id="presentation">
        <h2 class="section-title">Qui sommes-nous ?</h2>

        <div class="info-cards">
            <div class="card">
                <div class="card-icon green">
                    <i class="fas fa-heart"></i>
                </div>
                <h3>Notre mission</h3>
                <p>Nous sommes une association étudiante engagée à aider les étudiants en difficulté financière en leur
                    proposant des produits alimentaires et d'hygiène à prix réduits.</p>
            </div>

            <div class="card">
                <div class="card-icon blue">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Par des étudiants</h3>
                <p>Notre épicerie est principalement gérée par des bénévoles étudiants qui comprennent les défis de la vie
                    étudiante et s'engagent à soutenir leurs pairs, avec le soutien de professionnels bénévoles.</p>
            </div>

            <div class="card">
                <div class="card-icon yellow">
                    <i class="fas fa-hand-holding-heart"></i>
                </div>
                <h3>Solidarité</h3>
                <p>Au-delà de l'aide alimentaire, nous créons un espace d'échange et de convivialité où chaque étudiant
                    est accueilli avec dignité et respect.</p>
            </div>
        </div>

        <div class="permanences">
            <h3><i class="fas fa-clock"></i> Permanences</h3>
            <p class="permanences-time">Tous les mardis et jeudis<br>de 16h30 à 19h00</p>
            <p>Pour venir à l'épicerie, vous devez prendre rendez-vous en ligne. Notre système de réservation vous
                permet de choisir un créneau qui vous convient.</p>
            <div style="text-align: center; margin-top: 1.5rem;">
                <a href="https://app.episoletudiantedumans.fr" class="btn btn-register"
                    style="display: inline-block; margin: 0.5rem;">Créer un compte</a>
                <a href="https://app.episoletudiantedumans.fr" class="btn btn-login"
                    style="display: inline-block; margin: 0.5rem;">Prendre un RDV</a>
            </div>
        </div>

        <h3 style="text-align: center; color: #4E9667; margin: 3rem 0 2rem;">Nos valeurs</h3>
        <div class="values-grid">
            <div class="value-item">
                <i class="fas fa-balance-scale" style="color: #4E9667;"></i>
                <h4>Équité</h4>
                <p>Accès égal pour tous les étudiants</p>
            </div>
            <div class="value-item">
                <i class="fas fa-handshake" style="color: #5C77B9;"></i>
                <h4>Respect</h4>
                <p>Dignité et bienveillance</p>
            </div>
            <div class="value-item">
                <i class="fas fa-leaf" style="color: #4E9667;"></i>
                <h4>Durabilité</h4>
                <p>Produits locaux et responsables</p>
            </div>
            <div class="value-item">
                <i class="fas fa-smile" style="color: #D8B25E;"></i>
                <h4>Convivialité</h4>
                <p>Un lieu d'échange chaleureux</p>
            </div>
        </div>
    </section>

    <section class="section" id="equipe" style="background: white;">
        <h2 class="section-title">Notre équipe</h2>
        <p style="text-align: center; max-width: 700px; margin: 0 auto 3rem; color: #666;">
            Une équipe de bénévoles passionnés et engagés qui œuvrent quotidiennement pour faire de l'épicerie un lieu
            accueillant et solidaire.
        </p>
        <div class="team-grid">
            <div class="team-member">
                <div class="team-avatar" style="overflow: hidden; border-radius: 50%; width: 150px; height: 150px;">
                    <img src="assets/equipe/sandrine_soubeyran.jpeg" alt="Sandrine SOUBEYRAN" style="width: 100%; height: 100%; object-fit: cover;" loading="lazy">
                </div>
                <h4>Sandrine SOUBEYRAN</h4>
                <p>Gérante de l'épicerie</p>
            </div>
            <div class="team-member">
                <div class="team-avatar" style="overflow: hidden; border-radius: 50%; width: 150px; height: 150px;">
                    <img src="assets/equipe/Armel_LOKOSSOU.jpg" alt="Armel LOKOSSOU" style="width: 100%; height: 100%; object-fit: cover;" loading="lazy">
                </div>
                <h4>Armel LOKOSSOU</h4>
                <p>Président - Coordination générale et relations extérieures</p>
            </div>
            <div class="team-member">
                <div class="team-avatar" style="overflow: hidden; border-radius: 50%; width: 150px; height: 150px;">
                    <img src="assets/equipe/Sarah_Lechevalier.jpeg" alt="Sarah LECHEVALIER" style="width: 100%; height: 100%; object-fit: cover;" loading="lazy">
                </div>
                <h4>Sarah LECHEVALIER</h4>
                <p>Vice-présidente - Support à la présidence et gestion des opérations</p>
            </div>
            <div class="team-member">
                <div class="team-avatar" style="overflow: hidden; border-radius: 50%; width: 150px; height: 150px;">
                    <img src="assets/equipe/Alexandre_KAGAMBEGA.jpg" alt="Alexandre KAGAMBEGA" style="width: 100%; height: 100%; object-fit: cover;" loading="lazy">
                </div>
                <h4>Alexandre KAGAMBEGA</h4>
                <p>Trésorier - Gestion financière et comptabilité</p>
            </div>
            <div class="team-member">
                <div class="team-avatar" style="overflow: hidden; border-radius: 50%; width: 150px; height: 150px;">
                    <img src="assets/equipe/Hanaé_SAINT-JOURS.jpg" alt="Hanaé SAINT-JOURS" style="width: 100%; height: 100%; object-fit: cover;" loading="lazy">
                </div>
                <h4>Hanaé SAINT-JOURS</h4>
                <p>Secrétaire - Communication et administration</p>
            </div>
            <div class="team-member">
                <div class="team-avatar">
                    <i class="fas fa-users"></i>
                </div>
                <h4>Bénévoles</h4>
                <p>Permanences, stocks et accueil</p>
            </div>
        </div>
    </section>

    <section class="section" id="rejoindre">
        <h2 class="section-title">Nous rejoindre</h2>

        <div class="info-cards">
            <div class="card">
                <div class="card-icon orange">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <h3>Devenir bénéficiaire</h3>
                <p>Vous êtes étudiant et avez besoin d'un coup de pouce ? Inscrivez-vous en ligne sur notre site
                     pour prendre un rendes-vous par semaine puis présenter votre carte
                    étudiante lors de nos permanences.</p>
            </div>

            <div class="card">
                <div class="card-icon green">
                    <i class="fas fa-hands-helping"></i>
                </div>
                <h3>Devenir bénévole</h3>
                <p>Rejoignez notre équipe de bénévoles ! Quelques heures par semaine suffisent pour faire la différence.
                    Contactez-nous pour en savoir plus.</p>
            </div>

            <div class="card">
                <div class="card-icon blue">
                    <i class="fas fa-gift"></i>
                </div>
                <h3>Faire un don</h3>
                <p>Soutenez notre action par un don financier ou en nature. Chaque contribution aide à maintenir nos
                    prix bas et notre offre variée.</p>
            </div>
        </div>

        <div
            style="text-align: center; margin-top: 3rem; display: flex; flex-direction: column; gap: 1.5rem; align-items: center;">
            <a href="#contact" class="btn btn-primary">Contactez-nous pour plus d'informations</a>
            <div class="rejoindre-auth-buttons"
                style="display: flex; flex-direction: column; gap: 1rem; margin-top: 1rem; align-items: center;">
                <p>Déjà membre ? Connectez-vous pour prendre rendez-vous</p>
                <div style="display: flex; gap: 1rem; flex-wrap: wrap; justify-content: center;">
                    <a href="https://app.episoletudiantedumans.fr" class="btn btn-login">Prendre un RDV</a>
                    <a href="https://app.episoletudiantedumans.fr" class="btn btn-register">Créer un
                        compte</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section contact-section" id="contact">
        <div class="container">
            <h2 class="section-title">Contactez-nous</h2>
            <div class="contact-container">
                <div class="contact-form">
                    <h3>Envoyez-nous un message</h3>
                    <form action="send-email.php" method="POST" id="contactForm">
                        <div id="form-messages"
                            style="margin-bottom: 20px; padding: 10px; border-radius: 4px; display: none;"></div>
                        <div class="form-group">
                            <label for="name">Nom complet *</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Sujet</label>
                            <input type="text" id="subject" name="subject">
                        </div>
                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Envoyer le message</button>
                    </form>
                    <script>
                        // Gestion des messages de confirmation/erreur
                        document.addEventListener('DOMContentLoaded', function () {
                            const urlParams = new URLSearchParams(window.location.search);
                            const status = urlParams.get('status');
                            const messages = document.getElementById('form-messages');

                            if (status === 'success') {
                                messages.textContent = 'Votre message a été envoyé avec succès !';
                                messages.style.display = 'block';
                                messages.style.backgroundColor = '#d4edda';
                                messages.style.color = '#155724';
                            } else if (status === 'error') {
                                messages.textContent = 'Une erreur est survenue lors de l\'envoi du message. Veuillez réessayer.';
                                messages.style.display = 'block';
                                messages.style.backgroundColor = '#f8d7da';
                                messages.style.color = '#721c24';
                            }
                        });
                    </script>
                </div>
                <div class="contact-info">
                    <h3>Nos coordonnées</h3>
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h4>Adresse</h4>
                            <p>16 Boulevard Charles Nicolle<br>72000 Le Mans</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h4>Téléphone</h4>
                            <p><a href="tel:+33769542681" style="color: #4E9667; text-decoration: none;"></a>07 69 54 26
                                81</a></p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h4>Email</h4>
                            <p><a href="mailto:episoldumans@gmail.com"
                                    style="color: #4E9667; text-decoration: none;">episoldumans@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <h4>Horaires d'ouverture</h4>
                            <p>Mardi et Jeudi : 16h30 - 19h00</p>
                            <p>Sur rendez-vous le reste de la semaine</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map-container">
                <h3>Nous trouver</h3>
                <div class="map-wrapper">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2678.785760074909!2d0.19639!3d47.999881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e2fcf9a9c3d6b5%3A0x40d07f9a1d7b1b1d!2s16%20Boulevard%20Charles%20Nicolle%2C%2072000%20Le%20Mans!5e0!3m2!1sfr!2sfr!4v1630000000000!5m2!1sfr!2sfr"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="partenaires">
        <h2 class="section-title">Nos partenaires</h2>
        <p style="text-align: center; max-width: 700px; margin: 0 auto 3rem; color: #666;">
            Grâce à nos partenaires, nous pouvons proposer une offre variée et de qualité à prix solidaires.
        </p>
        <div class="partners-grid">
            <div class="partner-card">
                <div class="partner-logo">
                    <i class="fas fa-university"></i>
                </div>
                <h4>Le Mans Université</h4>
            </div>
            <div class="partner-card">
                <div class="partner-logo">
                    <i class="fas fa-seedling"></i>
                </div>
                <h4>Producteurs locaux</h4>
            </div>
            <div class="partner-card">
                <div class="partner-logo">
                    <i class="fas fa-building"></i>
                </div>
                <h4>Banque Alimentaire</h4>
            </div>
            <div class="partner-card">
                <div class="partner-logo">
                    <i class="fas fa-leaf"></i>
                </div>
                <h4>Biocoop</h4>
            </div>
            <div class="partner-card">
                <div class="partner-logo">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <h4>Carrefour</h4>
            </div>
            <div class="partner-card">
                <div class="partner-logo">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <h4>Harmonie Mutuelle</h4>
            </div>
            <div class="partner-card">
                <div class="partner-logo">
                    <i class="fas fa-landmark"></i>
                </div>
                <h4>Mairie du Mans</h4>
            </div>
            <div class="partner-card">
                <div class="partner-logo">
                    <i class="fas fa-gift"></i>
                </div>
                <h4>Agence du Don en Nature</h4>
            </div>
            <div class="partner-card">
                <div class="partner-logo">
                    <i class="fas fa-spa"></i>
                </div>
                <h4>Le Jardin Solidaire</h4>
            </div>
        </div>
        <p style="text-align: center; margin-top: 2rem;">
            <strong>Vous souhaitez devenir partenaire ?</strong><br>
            <a href="#contact" style="color: #5C77B9;">Contactez-nous pour établir un partenariat</a>
        </p>
    </section>

    <footer class="footer">
        <div class="footer-content">
            <div>
                <h4><img src="logo.png" alt="Logo Épicerie Solidaire"
                        style="height: 30px; vertical-align: middle; margin-right: 10px;">Épicerie Solidaire Étudiante
                </h4>
                <p>Une épicerie solidaire pour les étudiants, par des étudiants du Mans.</p>
                <div class="social-links">
                    <a href="https://www.facebook.com/epiceriesocialeuniversitedumans/?locale=fr_FR" target="_blank"
                        rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/episol72/" target="_blank" rel="noopener noreferrer"><i
                            class="fab fa-instagram"></i></a>
                    <a href="#" style="display: none;"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div>
                <h4>Navigation</h4>
                <a href="#accueil">Accueil</a>
                <a href="#presentation">Présentation</a>
                <a href="#rejoindre">Nous rejoindre</a>
                <a href="#contact">Contact</a>
            </div>
            <div>
                <h4>Contact</h4>
                <p><i class="fas fa-map-marker-alt"></i> 16 Boulevard Charles Nicolle<br>72000 Le Mans</p>
                <p><i class="fas fa-envelope"></i> episoldumans@gmail.com</p>
                <p><i class="fas fa-clock"></i> Mardi et Jeudi 16h30-19h00</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Épicerie Solidaire Étudiante du Mans - Tous droits réservés</p>
            <div class="footer-auth-links">
                <a href="https://app.episoletudiantedumans.fr">Prendre RDV</a>
                <span>|</span>
                <a href="https://app.episoletudiantedumans.fr">Créer un compte</a>
            </div>
        </div>
    </footer>

    <script>
        function toggleMenu() {
            const menu = document.querySelector('.nav-menu');
            menu.classList.toggle('active');
        }

        document.querySelectorAll('.nav-menu a').forEach(link => {
            link.addEventListener('click', () => {
                document.querySelector('.nav-menu').classList.remove('active');
            });
        });

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 70,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>

</html>