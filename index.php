<?session_start();?>
<!DOCTYPE html>

<html>
<head>
	<title>Espace vert</title>
	<link rel="stylesheet" href="espace_vert.css"/>


</head>
<body>
	<div class="bloc_page" id="bloc_page">
		
		<header>
			<div class="titre"> 
				<div class="logo">
					<a href="espace_vert.php">
					<img class="drole"src="photo/LOGOvrai.png" ></img></a>
					
				</div>
				<div class="logo22">
				<?
				if (isset($_SESSION['pseudo']))

				{
					?><p class="session">Bonjour <?echo $_SESSION['pseudo'];?></p>
					<form  action="deconnexion.php">
						<input class="deconnexion" type="submit" name="deconnexion" value="deconnexion">
					</form><?


				}
				else
				
				{

					?><div class="element1">	
					<form class="inscriptioon1" action="inscription.php">
				    	<input class="inscription1"type="submit" name="envoyer1" value="s'inscrire">
				    </form>
				</div>	
				<div class="element2">

					<form class="connexioon1" action="connection.php">
					<input class="connexion1"type="submit" name="envoyer" value="se connecter">
				    </form>
				</div><? 
				}?>


				


				</div>
				
			

			
		</div>
			





			
		</header>
		<nav>
                    <ul>
                        <li><a href="espace_vert.php">Accueil</a></li>
                        <li><a href="space_annonce.php">Annonce</a></li>
                        <li><a href="connection.php">Connexion</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>

		<div class="milieu">
			<img class="photo_arbre" src="photo/image.jpeg"></img>


		<section class="milieu_page">
			<article>
				
			</article>
		</section>
	    </div>
	    <div class="vraimilieu">
	    	<p class="vraimilieu1"> Trouvez votre jardinier </p>
	    	<p class="vraimilieu2"> En quelques clics postez votre annonce, et recevez les devis de jardiniers proche de chez vous </p>
	    </div>
	    <div class="case_info">
	    	<div class="case_info1"> <p class="case_info1P"> Le profesionnel qui vous convient </p> </br>  </div>
	    	<div class="case_info2"> <p class="case_info1P"> Vos tarifs </p></br>  </div>
	    	<div class="case_info3"> <p class="case_info1P">  </p> </div>
	    </div> 
	    	 <div class="vraimilieu6">
	    		<form class="vraimilieu4" action="annonce.php">
	    		     <input class="vraimilieu5" type="submit" name="vraimilieu5" value="postez votre annonce">
	    	    </form>
	    	 </div>

	    	 <?try
{
    
    $bdd = new PDO('mysql:host=localhost;dbname=message;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    
        die('Erreur : '.$e->getMessage());
}
$reponse = $bdd->query('SELECT  * FROM annonce');
?>

	    
	             


	    </div>

		<footer class="pied_page">
			
		</footer>
	</div>
</body>
</html>
