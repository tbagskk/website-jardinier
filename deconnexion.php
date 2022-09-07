<? session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title>deconnexion</title>
	<link rel="stylesheet" type="text/css" href="deconnexion.css">
</head>
<body>
	<? session_destroy(); ?>

	<p class=deconnexion> VOUS ÊTES DECONNECTE</p>
	<form action="espace_vert.php">
		<input type="submit" name="accueil" value="accueil">
</body>
</html>