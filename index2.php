<?php 
 //Nous allons démarrer la session avant toute chose
   session_start() ;
  include("connexion.php");
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="dist/index.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="script.js" defer></script>
</head>
<body>

  <header> 
    <div class="divlogo">
        <img src="img/logo.png" alt="" class="logo">
    </div>
 <!--
    <div class="icone">
        
        <a href="#" >
            <img src="img/compte.png" alt="" class="compte">
        </a>

-->
        <div class="icone">
            
                <a href="#" id="open_compte" >
                    <img src="img/compte.png" alt="" class="compte">
                </a>
                <div class="popup-container" id="container">
   
        <div class="popup">
    <!-- zone de connexion -->
 
            <form action="" method="POST">
                <button class= "close_connexion" id="closepopup">&times;</button>
                <h1>Connectez-vous</h1>
    
                <?php 
                $message='Voici un message en javascript écrit par php';
                
                    if(isset($erreur)){// si la variable $erreur existe , on affiche le contenu ;
                        echo '<script type="text/javascript">window.alert("'.$erreur.'");</script>';
                    }
                   
                ?>
                <label><b>Email :</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="mail">
                <label><b>Mot de passe :</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="mot_de_passe" required>

                <input type="submit" value="Connexion" name="boutton-valider" id="valider">

                <input type="submit" value="Retour" name="boutton-creer"  class="creer" id="open2">
    
                   

                <p><a href="#" class="creer" id="open_creer">Vous n'avez pas de compte?</a></p>
            
            </form>
        </div>
    </div>

    <div id="container2">
        <div class="creer-container" id="creer">
            <div class="creer" id="cree">
                <h1>Creer un compte</h1>
                <form action="" method="POST">

                <button class= "close" id="close_creer">&times;</button>
        
                    <label><b>Nom</b></label>
                    <input type="texte" placeholder="Entrer votre nom" name="nom" required>

                    <label><b>Prénom</b></label>
                    <input type="texte" placeholder="Entrer votre prénom" name="prenom" required>

                    <label><b>E-mail</b></label>
                    <input type="texte" placeholder="Entrer votre email" name="email" required>

                    <label><b>Mot de passe :</b></label>
                    <input type="password" placeholder="Entrer le mot de passe" name="mot_de_passe" required>

                    <label for="avatar">Choisir une photo de profil :</label>

                    <input type="file" id="photo" name="avatar" accept="image/png, image/jpeg, image/jpg">



                    <button id="open_confirmer" > Continuer </button>

                <button class="allclose" id="open">Retour</button>
                </form>
            </div>
     </div>

    </div>
    <div class="Confirmer-container" id="confirmer">
        <div class="confirmer" >
            <h1>Confirmer</h1>
            <form action="creer.php" method="POST">

               
    
                <label><b>Entrer le code envoyer par mail</b></label>
                <input type="chiffre" placeholder="Entrer le code" name="code" required>

                <button id="open4"> Continuer </button>

            <button class="allclose" id="close_confirmer">Retour</button>
            </form>
            </div>
    </div>

            <div class="divmenu">
             <img src="img/menu.png" alt="" class="menu__btn" id="open_menu">
              
          
              <ul class="menu__box" id="menu">
                <button class= "close" id="close">&times;</a></button>
                <li><a class="menu__item accueil" href="#">Accueil</a></li>
                <li><a class="menu__item animations" href="#">Animations</a></li>
                    <ul class="sous_menu">
                        <li><a href="#" class="sous_menu__item evenement">Événement</a></li>
                        <li><a href="#" class="sous_menu__item competition">Compétition</a></li>
                        <li><a href="#" class="sous_menu__item calendrier">Calendrier</a></li>
                    </ul>
                <li><a class="menu__item multimedia" href="#">Multimédia</a></li>
                <li><a class="menu__item documents" href="#">Documents</a></li>
                <li><a class="menu__item partenaires" href="#">Partenaires</a></li>
              </ul>
            </div>
        </div>

  </header>
   <div id="page-content">
      <p>Page Content</p>
   </div>

  
</body>
</html>