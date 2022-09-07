<?
session_start();?>

<!DOCTYPE html>
<html>
<head>
	<title>space annonce</title>
	<link rel="stylesheet" href="space_annonce.css"/>
	<div id="bloc_page">
		<header>
			<div class="titre"> 
				<div class="logo">
					
					<a href="espace_vert.php">
					<img class="drole"src="photo/LOGOvrai.png" ></img></a>
				</div>
			</div>
			</head>
			<nav>
                    <ul>
                        <li><a href="espace_vert.php">Accueil</a></li>
                        <li><a href="space_annonce.php">Annonce</a></li>
                        <li><a href="connection.php">Connexion</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>


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


<div class="milieu">
     	<p class="milieuP"> Annonces : espace vert </p>
    
         
<?php
while ($donnees = $reponse -> fetch())
    {
       

       ?><div class="milieu2">
     		<img class="img" src="photo/arbre.jpg">
     		<div class="milieu4">
     		    <div><p class="milieu2P"><? echo $donnees['titre'] ?></p></div>
     		    <div class="milieu3"><p class="milieuannonce"><? echo $donnees['annonce'] ?></p></div>
     	    </div>
     	</div><?

    }
        
        

   
    ?>





     
     	
     		
     
     </div>
     <footer class="pied_page">
			
		</footer>