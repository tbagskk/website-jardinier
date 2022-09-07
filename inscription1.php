<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>connection1</title>
	<link rel="stylesheet" type="text/css" href="inscription1.css">
</head>
<body>
<?php
try
{
    
    $bdd = new PDO('mysql:host=localhost;dbname=message;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    
        die('Erreur : '.$e->getMessage());
}

$adresse_mail=$_GET['adresse_mail'];
$pseudo = $_GET['pseudo'];






//pour verifier qu'il n'y a pas de champs vide
if($adresse_mail != "" && $pseudo != "")

{	
	//pour verifier que l'adresse mail est valide
    if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_GET['adresse_mail']))
     
     {

	     ?><p class="identifiant">adresse mail valide</p><?
     }
    
    else
      {
	    ?><p class="identifiant">adresse mail non valide</p><?
	    exit;
      }

	

//commence la chaine pour verifier si le pseudo et le mail sont deja utilisé	
	$req = $bdd->prepare('SELECT * FROM compte WHERE pseudo = :pseudo ');
    $req->execute(array(
   'pseudo' => $pseudo));
    $resultat = $req->fetch();
 


      if (!$resultat)
      {
         $req = $bdd->prepare('INSERT INTO compte (pseudo, mot_de_passe, adresse_mail ) VALUES(?,?,?)');
         $req->execute(array($_GET['pseudo'] ));
    
      }
      
      else
      {
	     ?><p class="identifiant">IDENTIFIANT DEJA UTILISE</p><?
 	
      } 


      $req1 = $bdd->prepare('SELECT * FROM compte WHERE adresse_mail = :adresse_mail ');
      $req1->execute(array(
     'adresse_mail' => $adresse_mail));
      $resultat1=$req1->fetch();

      if (!$resultat1)
      {
	
	     $req1 = $bdd->prepare('INSERT INTO compte (pseudo, mot_de_passe, adresse_mail ) VALUES(?,?,?)');
         $req1->execute(array($_GET['pseudo'], $_GET['mot_de_passe'],$_GET['adresse_mail']));
         ?><p class="inscrit"> BRAVO VOUS ETES INSCRIT </p><?
      }

      else
      {
	     ?><p class="mail">ADRESSE MAIL DEJA UTILISE</p><?
      }	     


}

#S htmlentities() 
//si les champs sont vide pas de verification de mail deja utilisé ou d'inscription
else
{	?><p>PAS DE CHAMPS VIDE</p><?

}


	    











#header('Location: inscription.php');





#if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['mail']))
?>

</body>
</html>
