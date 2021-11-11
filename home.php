
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/traitement.css" >
    <title>Accueil</title>
    <style>
        body{
            background: url("img/accueil.jpg ") center top/cover no-repeat fixed;

            
        }
        p{
            padding-top:40px;
            font-style: italic;
            font-size: 1.9em;
            color:darkviolet;
        }
    </style>
</head>
<body>
    <?php
        session_start();    //Session démarrée
        include("connexion.php");

        if($_SESSION['id'] != ""){
            
            //Vérification des variables de session
            echo "<center><p>bonjour  ". $_SESSION['name']."  ". $_SESSION['pname']." <br>bienvenue à DIGIFAZ. Ici nous prenons soin de votre image digitale.</p>";
        }         
    ?>  
    <form action="deconnexion.php">
    <input type="submit"  value="Déconnexion">
    </form></center>
</body>
</html>


                
                
            
