<?php
    session_start(); //ouvrir la session de connexion
	include('connexion.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" >
    <title>Connexion</title>
</head>
<body>
    <h1>Connectez vous</h1>
     <div id="container">
        <form action="" method="POST" name="frm">
            <div>
                <!-- nom d'utilisateur -->
                <label for="userName" >Nom d'utilisateur<sup>*</sup></label>
                <input type="text" name="userName" id="userName" required autofocus>
            </div><br> 
            <div>
                <!-- mot de passe -->
                <label for="password">Mot de passe<sup>*</sup></label>
                <input type="password" name="password" id="password" required>
            </div>
            <p id="phrase">les champs avec <sup>*</sup> sont obligatoires</p><br>
            <center>
                <input type="submit" value="Connexion" name="connexion" ><br>
                <p>Vous n'avez pas encore de compte <a href="inscription.php">Inscrivez-vous</a></p>
            </center>
            <center>
                <p>Voir la liste des Utilisateurs <a href="users.php">Voir Liste</a></p>
            </center>
        </form>
    </div>


    <?php
        //soumission du formulaire de connexion
        if(isset($_POST['connexion'])) {        // si le bouton "Connexion" est appuyé
            $user = $_POST['userName'];         //affectation de la variable $_POST['userName'] à $user
            $pass = $_POST['password'];         //affectation de la variable $_POST['password'] à $pass
            $req = "SELECT * FROM utilisateur WHERE user='".$user."'AND mdp='".$pass."'";//on vérifie si les données existent dans la base
            $exec_req=mysqli_query($con,$req);
            $data= mysqli_fetch_array($exec_req);
            if($data){                     // nom d'utilisateur et mot de passe correctes

                //Création des variables de session
                 $_SESSION['username']= $data['user'];
                $_SESSION['id']= $data['id'];
                $_SESSION['name'] = $data['nom'];
                $_SESSION['pname'] = $data['pnom']; 
               
                //Appel de la page home.php suivie de l'identifiant :$_SESSION['id']

                header('Location: home.php?id'. $_SESSION['id']);
            }
        }
       mysqli_close($con);        
    ?>
</body>
</html>

                