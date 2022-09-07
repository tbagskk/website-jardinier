<?session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>connection1</title>
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




$pseudo = $_GET['pseudo'];
$mdp =$_GET['mot_de_passe'];
$cox='1';

if($pseudo != "" && $mdp != "")
{
	?><p class="identifiant">pas vide bravo</p><?
}
else
{
	?><p class="identifiant">champsvide</p><?
	
	exit;
}

$req = $bdd->prepare('SELECT * FROM compte WHERE pseudo = :pseudo ');
$req->execute(array(
   'pseudo' => $pseudo));
   
  $resultat = $req->fetch();


if (!$resultat)
{
    echo 'Mauvais identifiant !';
    header('Location: connection.php');

}
else
{
	
	echo 'bravo';
	$req =$bdd->prepare('SELECT * FROM compte WHERE mot_de_passe = :mdp');
	$req->execute(array(
	   'mdp' => $mdp));
	$resultat = $req->fetch();

	if (!$resultat)
	{	
		echo 'mauvais mdp batard';
	    header('Location: connection.php');

	}
	else
	{
		session_destroy();
		echo 'bon mdp';
	    session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['pseudo'] = $pseudo;
        header('Location: espace_vert.php');
        

    }

	
}



#if (!$mdp)
#{
#	echo 'mauvais mot de passe bg';
#}
#else
#{
#	echo'bravo t cho';
#}
        
        

    





?>




</body>
</html>
