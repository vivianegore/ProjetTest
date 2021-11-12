<?php
    include("connexion.php")
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style_1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateurs</title>
</head>
<body>
    <center>
        <h1>LISTE DES UTILISATEURS</h1>
        <table cellpadding="6">
            <tr class="head">
                <td>Nom Utilisateurs</td>
                <td>Nom</td>
                <td>Prenom</td>
                <td>Date d'Inscription</td>
                <td>Ajouter</td>
                <td>Supprimer</td>
            </tr>
            <?php
                $req="select user,nom,pnom,dateinsc from utilisateur";
                $req=mysqli_query($con,$req);
                if ($req) {
                    # code...
                    while ($res=mysqli_fetch_array($req)) {
                        # code...
                        echo '<tr >
                            <td class="td">'.$res['user'].'</td>
                            <td class="td">'.$res['nom'].'</td>
                            <td class="td">'.$res['pnom'].'</td>
                            <td class="td">'.$res['dateinsc'].'</td>
                            <td class="td"><a href="inscription.php">&#9997;</a></td>
                            <td class="td"><a href="#">&#9984;</a></td>
                            </tr>';
                    }
                }
                else 
                echo'Erreur de requette'
            ?>   
        </table>
    </center>
</body>
</html>