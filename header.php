<?php 
 //Nous allons démarrer la session avant toute chose
   session_start() ;
  include("connexion.php");
  
?>

 <script>
   /*                     
    var variableRecuperee = /
    const valider = document.getElementById("valider");
    if(variableRecuperee =< 0)
    {

        valider.addEventListener("click", () => {
            alert("Adresse Mail ou Mots de passe incorrectes !");
        });

            
    } 
    */
   
</script>
<!DOCTYPE html>
<html lang="en">
<head>
    link.css
    <meta charset="UTF-8">
    <link rel="stylesheet" href="dist/styles.css">
    <script src="script.js" defer></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        
        <img src="logo.png" alt="">
        <nav>
            <ul>
                <li><a class="a1" href="#">Home</a></li>
                <li><a class="a2" href="setlist.php">SetlList</a></li>
                <li><a class="a3" href="#">Contact</a></li>
                <!-- <li><a id="open" class="btn1" href="#">Sign up</a></li> -->

            
                <?php

                $disco =  '<li><a id="close" class="btn1" href="index.php">Disconnect</a></li>';
                
                $signup =  '<li><a id="open" class="btn1" href="#">Sign up</a></li>';

                if (isset($validey))
                    {
                        echo $disco;
                        
                    }
                    else
                    {
                        echo $signup;
                    }
                ?>
                              
            </ul>
        </nav>
    </header>


    

    <div class="popup-container" id="container">
   
        <div class="popup">
    <!-- zone de connexion -->
 
            <form action="" method="POST">
                <button class= "close" id="close">&times;</button>
                <h1>Connexion</h1>
    
                <?php 
                $message='Voici un message en javascript écrit par php';
                
                    if(isset($erreur)){// si la variable $erreur existe , on affiche le contenu ;
                        echo '<script type="text/javascript">window.alert("'.$erreur.'");</script>';
                    }
                   
                ?>
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="email">
                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="mdp" required>

                <input type="submit" value="Valider" name="boutton-valider" id="valider">
                    <script>
                        /*
                       
                            alert("Adresse Mail ou Mots de passe incorrectes !");
                        
                    </script>
             


      

            
                    <input type="submit" value="Creer" name="boutton-creer"  class="creer" id="open2">
            
            </form>
        </div>
    </div>

    <div id="container2">

    

<!--

    <div class="sure-container" id="sure">
        <div class="sure">
            <h1>Are you sure?</h1>

            <button class="allclose" id="close">Yes</button>
            <button class="allclose" id="close2">No</button>
        </div>
    </div>

                -->



    <div class="creer-container" id="creer">
        <div class="creer" id="cree">
            <h1>Creer un compte</h1>
            <form action="" method="POST">

            <button class= "close" id="close2">&times;</button>
    
                <label><b>Nom</b></label>
                <input type="texte" placeholder="Entrer votre nom" name="nom" required>

                <label><b>Prénom</b></label>
                <input type="texte" placeholder="Entrer votre prénom" name="prenom" required>

                <label><b>E-mail</b></label>
                <input type="texte" placeholder="Entrer votre email" name="email" required>

                <label><b>Mot de passe</b></label>
                <input type="texte" placeholder="Entrer votre mdp" name="mdp" required>

                <label><b>Confirmer votre mot de passe</b></label>
                <input type="texte" placeholder="Entrer votre mdp" name="mdp" required>

                <button id="open3" > Continuer </button>

            <button class="allclose" id="open">Retour</button>
            </form>
        </div>
    </div>

  <!--
    <div class="sure-container" id="sure">
        <div class="sure">
            <h1>Are you sure?</h1>

            <button class="allclose" id="close">Yes</button>
            <button class="allclose" id="close2">No</button>
        </div>
    </div>

    <div class="creer-container" id="creer_container">
        <div class="creer" id="creer">
            <h1>Creer un compte</h1>
            <form action="creer.php" method="POST">

                <button class= "close" id="open2">&times;</button>
    
                <label><b>Nom</b></label>
                <input type="texte" placeholder="Entrer votre nom" name="nom" required>

                <label><b>Prénom</b></label>
                <input type="texte" placeholder="Entrer votre prénom" name="prenom" required>

                <label><b>E-mail</b></label>
                <input type="texte" placeholder="Entrer votre email" name="email" required>

                <label><b>Age</b></label>
                <input type="chiffre" placeholder="Entrer votre age" name="age" required>

                <label><b>Prénom</b></label>
                <input type="texte" placeholder="Entrer votre prénom" name="prenom" required>

                <button> Continuer </button>

            <button class="allclose" id="close2">Retour</button>
            </form>
        </div>
    </div>
    <div class="sure-container" id="sure">
        <div class="sure">
            <h1>Are you sure?</h1>

            <button class="allclose" id="close">Yes</button>
            <button class="allclose" id="close2">No</button>
        </div>
    </div>

   Faire une confirmation par mail -->
    <div class="Confirmer-container" id="confirmer">
        <div class="confirmer" >
            <h1>Confirmer</h1>
            <form action="creer.php" method="POST">

                <button class= "close" id="close3">&times;</button>
    
                <label><b>Entrer le code envoyer par mail</b></label>
                <input type="chiffre" placeholder="Entrer le code" name="code" required>

                <button id="open4"> Continuer </button>

            <button class="allclose" id="close2">Retour</button>
            </form>
        </div>
    </div>
  <!--  <div class="sure-container" id="sure">
        <div class="sure">
            <h1>Are you sure?</h1>

            <button class="allclose" id="close">Yes</button>
            <button class="allclose" id="close2">No</button>
        </div>
    </div>
                -->
    <div class="Finaliser-container" id="finaliser">
        <div class="finaliser" id="open4">
            
            <form action="creer.php" method="POST">

                <button class= "close" id="close3">&times;</button>

                <label><b>New Utilisateur</b></label>
                <input type="texte" placeholder="Entrer votre Utilisateur" name="mdp" required>

                <label><b>Mot de passe</b></label>
                <input type="texte" placeholder="Entrer votre mdp" name="mdp" required>

                <label><b>Confirmer votre mot de passe</b></label>
                <input type="texte" placeholder="Entrer votre mdp" name="mdp" required>

            

                <button id="close4"> Continuer </button>

                
                <button class="allclose" id="close2">Retour</button>
            </form>
        </div>
    </div>
    </div>


    <div class="sure-container" id="sure">
        <div class="sure">
            <h1>Are you sure?</h1>

            <button class="allclose" id="close">Yes</button>
            <button class="allclose" id="close2">No</button>
        </div>
    </div>

    <div class="Fini-container" id="Fini">
        <div class="fini" id="open6">
            <h1>Vous-êtes inscrit!</h1>
        </div>
    </div>

    <div class="sure-container" id="sure">
        <div class="sure">
            <h1>Are you sure?</h1>

            <button class="allclose" id="close">Yes</button>
            <button class="allclose" id="close2">No</button>
        </div>
    </div>

    <div class="sure-container" id="sure">
        <div class="sure">
            <h1>Are you sure?</h1>

            <button class="allclose" id="close">Yes</button>
            <button class="allclose" id="close2">No</button>
        </div>
    </div>
    



