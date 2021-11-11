<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/traitement.css" >
    <title>Traitement de l'inscription </title>
</head>
<style>
    p{
        font-style: italic;
        font-size: 2em; 
        color:darkblue;
        text-align:center;
    }
</style>
<body>
    
    <?php
        
        // Formulaire d'inscription
        if (isset($_POST['valider'])){
            $nom = $_POST['nom'];
            $pnom = $_POST['pnom'];
            $mdp = md5($_POST['password']);
            $userName = $_POST['userName'];
            $date= date('d m Y h:i:s');
            include('connexion.php');
            $req = "INSERT INTO utilisateur VALUES(0,'$nom','$pnom','$mdp','$userName','$date')";		
            $req= mysqli_query($con,$req);
        }
        echo"<p >".$nom." ".$pnom.",Votre inscription a été effectuée avec succès!!!<br>Connectez vous avec votre nom d'utilisateur et votre mot de passe.</p>";
    ?>

    <center>
        <form action="index.php">
            <input type="submit"  value="Se connecter">
        </form>
    </center>
    
</body>
</html>




