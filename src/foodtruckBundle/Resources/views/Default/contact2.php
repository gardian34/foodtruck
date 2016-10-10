<?php session_start(); ?>
echo
<!DOCTYPE html5>
<html>
  <head>
    <title>porfolio de charles-andre</title> <!-- titre qui est afficher dans l'onglet du site -->
		<meta charset="utf-8"> 	<!-- permet au site de lire les caractere speciaux -->
    <link rel="stylesheet" href="http://driad.fr/portfolio/css/style.css"/>	<!-- lien vers le fichier css du menu de navigation-->
    <script src="http://driad.fr/portfolio/javascript/contact.js"></script> <!-- line vers fichier javascript -->
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/png" href="http://driad.fr/portfolio/img/logo-onglet.png" />
  </head>
<body>

<!-- **************** NAVIGATION + TITRE PRINCIPAL *******************  -->
<header>
  <!-- MENU  -->
    <nav>
      <ul>
        <li><a href="http://driad.fr/index.html"><span>Accueil</span></a></li>
        <li><a href="http://driad.fr/portfolio/pages/quisuisje.html"><span>Qui Suis Je</span></a></li>
        <li><a href="http://driad.fr/portfolio/pages/projets.html"><span>Projet</span></a></li>
        <li><a href="http://driad.fr/portfolio/pages/contact.php"><span>Contact</span></a></li>

      </ul>
    </nav>
</header>


<!-- **************** CONTACT  *******************  -->
    <h3>CONTACTEZ-MOI</h3>

      <div class="container">
        <div>
            <?php if(array_key_exists('errors', $_SESSION)): ?>
                <div>
                  <?= implode('<br>', $_SESSION['errors']); ?>
                </div>
            <?php endif; ?>
            <?php if(array_key_exists('success', $_SESSION)): ?>
                        
                    
                        <div class="title-text">
                            <h1>Email Envoyé!</h1>
                        </div>
                        
            <?php endif; ?>

            <form action="/portfolio/php/post_contact.php" method="POST" target="_parent">

                <div>
                    <div>
                        <label for="inputname">NOM</label>
                        <input required type="text" name="name"  id="inputname" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ''; ?>">
                    </div>
                </div>


                <div>
                    <div>
                        <label for="inputprenom">PRENOM</label>
                        <input type="text" name="prenom" id="inputprenom" value="<?= isset($_SESSION['inputs']['prenom']) ? $_SESSION['inputs']['prenom'] : ''; ?>">
                    </div>
                </div>


                <div>
                    <div>
                        <label for="inputemail">EMAIL</label>
                        <input required type="email" name="email" id="inputemail" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>">
                    </div>
                </div>

                <div>
                    <div>
                        <label for="inputobjet">OBJET</label>
                        <input required type="objet" name="objet" id="inputobjet" value="<?= isset($_SESSION['inputs']['objet']) ? $_SESSION['inputs']['objet'] : ''; ?>">
                    </div>
                </div>

                <div>
                    <div>
                        <label for="inputemessage">MESSAGE</label>
                        <textarea required id="inputemessage" name="message"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></textarea>
                    </div>
                    <button type="submit">Envoyer</button>
                </div>

            </form>
        </div>
    </div>
</div>


<!-- **************** FIN FORMULAIRE CONTACT  *******************  -->



<!-- **************  LIEN DE RESEAUX SOCIAL ************** -->
        <div class="footer">
            <div class="social" href="https://www.facebook.com/charles0andre">&#62220;</div>
            <div class="social">&#62217;</div>
            <div class="social">&#62223;</div>
            <div class="social">&#62232;</div>
       </div>
<!-- **************  FIN LIEN DE RESEAUX SOCIAL ************** -->
  	</section>
  </body>
</html>
<?php
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);
?>