<?
session_start();

try
{
    
    $bdd = new PDO('mysql:host=localhost;dbname=message;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    
        die('Erreur : '.$e->getMessage());
}

$titre=$_GET['titre'];
$pseudo=$_GET['nom'];
$adresse=$_GET['adresse'];
$annonce=$_GET['annonce'];


if($titre != "" && $pseudo != "" && $adresse != "" && $annonce != "")
{
	$req = $bdd->exec("INSERT INTO annonce (titre,pseudo,adresse,annonce) VALUES('$titre','$pseudo','$adresse','$annonce')");
	header('Location: space_annonce.php');


}

else
{
	?><p> CHAMPS VIDE </p><?

}

#$req = $bdd->exec("INSERT INTO annonce (titre,pseudo,adresse,annonce) VALUES('$titre','$pseudo','$adresse','$annonce')");
#$req->execute(array(
	
#'$titre','$pseudo','$adresse','$annonce'




#print $titre;

#print "ok";

#header('Location: espace_vert.php');

