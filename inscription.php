<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forms.css">
    <title>inscription  </title>
</head>
<h1> formulaire d'Inscription</h1>
<body>
    <form action="inscription.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br>

        <label for="prenom">Prénom :</label><br>
        <input type="text" id="prenom" name="prenom" required><br>

        <label for="pseudo">Pseudo :</label><br>
        <input type="text" id="pseudo" name="pseudo" required><br>

        <label for="email">Email :</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="motdepasse">Mot de passe :</label><br>
        <input type="password" id="motdepasse" name="motdepasse" required><br>

        <input type="submit" name="OK" value="m'inscrire">
    </form>
      <div id="consentCheckboxContainer">
        <label for="consentCheckbox">J'accepte les termes et conditions d'utilisation</label>
        <input type="checkbox" id="consentCheckbox" name="consentCheckbox" required>
    </div>
    <div id="consentCheckboxContainer">
        <label for="consentCheckbox">J'accepte l'utilisation des cookies</label>
        <input type="checkbox" id="consentCheckbox" name="consentCheckbox">
    </div>
    
</body>
</html>