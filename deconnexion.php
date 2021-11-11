<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Déconnexion</title>
	<style>
		body{
			font-family:Georgia, 'Times New Roman', Times, serif;
    		background: url("img/dec.jpg") center center/cover no-repeat fixed;
			margin:40px;
			text-align: center;
		}
		h1{
			
			font-weight: lighter;

		}
		a{
			text-decoration: none;
    		color: red;
			font-size: .8em;
			
		}
	</style>
</head>
<body>
	<!-- tester si l'utilisateur est connecté --> 
	<?php 

	session_start(); 
	session_unset();
	session_destroy(); 
	echo'<h1>Vous avez été déconnecté.</h1><a href="index.php"> Cliquer ici pour vous connecter à nouveau</a>';
	?>
	

	 <!-- session_start(); 
	if(isset($_POST['deconnexion'])) { 
		
			session_unset(); 
			header("location:index.php");
		
	} else if($_SESSION['id'] !== ""){
	$name = $_SESSION['name']; 
	$pname = $_SESSION['pname']; 
	// afficher un message 
	echo "<br>Bonjour $name $pname, vous êtes encore connecté"; 
	}   -->
</body>
</html>