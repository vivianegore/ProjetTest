<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" >
    <title>Inscription</title>
</head>
<body>
    <h1>Inscrivez vous</h1>
    <div id="container">
        <form action="traitement.php" method="POST" name="frm">
            <div>
                <label for="name" required>Nom<sup>*</sup></label>
                <input type="text" name="nom" id="name" placeholder="votre nom..." autofocus required>
            </div><br>
            <div >
                <label for="pnom" required>Prenom<sup>*</sup></label>
                <input type="text" name="pnom" id="pnom" placeholder="votre prénom..." required>
            </div><br>
            <div >
            <label for="password" required>Mot de passe<sup>*</sup></label>
                <input type="password" name="password" id="password" required>
            </div><br>
            <div >
                <label for="user" required>Nom d'utilisateur<sup>*</sup></label>
                <input type="text" name="userName" id="user" placeholder="votre nom d'utilisateur..." required>
            </div><br>
            <p id="phrase">Nb:les champs avec<sup>*</sup> sont obligatoires</p>
            <center>
                <input type="submit" value="Valider" name="valider" >
                <p>vous avez déjà un compte <a href="index.php">Connectez-vous</a></p>
            </center>  
        </form>
    </div>
</body>
</html>