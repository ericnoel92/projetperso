<?php
// Vérification si le formulaire a été soumis et si les champs obligatoires sont remplis
if(isset($_POST["OK"]) && !empty($_POST["pseudo"]) && !empty($_POST["motdepasse"]) && !empty($_POST["email"])){
   // Récupération des données du formulaire
   $nom = $_POST["nom"];
   $prenom = $_POST["prenom"];
   $pseudo = $_POST["pseudo"];
   $email = $_POST["email"];
   $motdepasse = $_POST["motdepasse"];
   
   // Vérifier si l'utilisateur existe déjà dans la base de données
   $requete = $bdd->prepare("SELECT COUNT(*) FROM users WHERE email = :email");
   $requete->execute(array("email" => $email));
   $resultat = $requete->fetchColumn();
   
   if($resultat == 0) {
       // L'utilisateur n'existe pas encore, nous l'insérons dans la base de données
       $requete = $bdd->prepare("INSERT INTO users (nom, prenom, pseudo, motdepasse, email) VALUES (:nom, :prenom, :pseudo, :motdepasse, :email)");
       
       // Exécution de la requête avec les données fournies
       $requete->execute(array(
          "nom" => $nom,
          "prenom" => $prenom,
          "pseudo" => $pseudo,
          "motdepasse" => $motdepasse,
          "email" => $email
       ));
       
       // Affichage d'un message de succès
       echo "L'inscription s'est bien déroulée. Vous pouvez maintenant vous connecter.";
   } else {
       // L'utilisateur existe déjà, afficher un message d'erreur
       echo "L'utilisateur existe déjà dans la base de données.";
   }
   
   // Affichage des données du formulaire pour débogage
   echo "Nom: $nom, Prénom: $prenom, Pseudo: $pseudo, Mot de passe: $motdepasse, Email: $email";
} else {
    // Affichage d'un message d'erreur si les champs obligatoires ne sont pas remplis
    echo "Veuillez remplir tous les champs obligatoires.";
}
