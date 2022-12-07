<?php
if(isset($_POST['boutton-valider'])){ // Si on clique sur le boutton , alors :
    //Nous allons verifiér les informations du formulaire
    if(isset($_POST['mail']) && isset($_POST['mot_de_passe'])) { //On verifie ici si l'utilisateur a rentré des informations
      //Nous allons mettres l'mail et le mot de passe dans des variables
      $mail = $_POST['mail'];
      $mdp = $_POST['mot_de_passe'];

      $erreur = NULL;

      $validey = NULL;

     
       //Nous allons verifier si les informations entrée sont correctes
       //Connexion a la base de données
       $nom_serveur = "localhost";
       $utilisateur = "yusdel";
       $mot_de_passe ="root";
       $nom_base_données ="sae3" ;
       $con = mysqli_connect($nom_serveur , $utilisateur ,$mot_de_passe , $nom_base_données);
       //requete pour selectionner  l'utilisateur qui a pour mail et mot de passe les identifiants qui ont été entrées
        $req = mysqli_query($con , "SELECT * FROM Adherent WHERE mail = '$mail' AND mot_de_passe ='$mdp' ") ;
        $num_ligne = mysqli_num_rows($req) ;//Compter le nombre de ligne ayant rapport a la requette SQL
        if($num_ligne > 0){
            $validey = "Valideyy";
           // header("Location:bienvenu.php") ;//Si le nombre de ligne est > 0 , on sera redirigé vers la page bienvenu
            // Nous allons créer une variable de type session qui vas contenir l'mail de l'utilisateur
           
        }else {//si non
            
            $erreur = "Adresse Mail ou Mots de passe incorrectes !";
        }

        
    }
    
  }
?>