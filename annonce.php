
<?session_start();?>

<!DOCTYPE html>
<html>
<head>
	<title>annonce</title>
	<link rel="stylesheet" href="annonce.css"/>
	
<header>
			<div class="titre"> 
				<div class="logo">
					
					<a href="espace_vert.php">
					<img class="drole"src="photo/LOGOvrai.png" ></img></a>
				</div>
			</div>
</header>
<body>
			<nav>
                    <ul>
                        <li><a href="espace_vert.php">Accueil</a></li>
                        <li><a href="space_annonce.php">Annonce</a></li>
                        <li><a href="connection.php">Connexion</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
   <div id="bloc_page">



	<div class="annonce">
		
		
		<form class="annonce1" action="annonce1.php" method="get">
			<p class="poster_annonce"> Postez une annonce </p>
			<p class="annonce2p"> TITRE DE L'ANNONCE </p>
			<input class="annonce2"type="text" name="titre"> </br>
			<p class="annonce2p"> NOM/PRENOM </p>
			<input class="annonce3"type="text" name="nom"> </br>
			<p class="annonce2p"> ADRESSE</p>
			<input class="annonce4" type="text" name="adresse"> </br>
			<p class="annonce2p"> ANNONCE </p>
			<input class="annonce5"type="text" name="annonce"> </br>
			<input class="annonce6"type="submit" name="envoyer" value="M'inscrire">
		</form>
	</div>
   </div>

</body>


<footer class="pied_page">
			
</footer>


</html>