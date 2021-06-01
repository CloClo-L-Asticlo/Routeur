<!DOCTYPE html>
<?php
	session_start();
	include "../Modèle/bdd_Connect.php";
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="Style2.css">
	</head>

	<body>
        <form  class="formbasic" action="../Controleur/compte.php" method="POST">
		<?php
			$rep = $bdd->query("SELECT * FROM User WHERE idUser =". $_SESSION['idUser']);
                while ($donnees = $rep->fetch()){
                    if (isset($donnees['nameUser']) ) { 
						echo "pseudo: <input  class=\"inputbasic nameUser\"type=\"text\"name=\"pseudo\"value=\"" . $donnees['nameUser'] . "\"minlength=\"1\"><br><br>";
						echo "email: <input class=\"inputbasic emailUser\" type=\"email\"name=\"email\"value=\"" . $donnees['email'] . "\"minlength=\"1\"><br><br>";
        				echo "mot de passe: <input class=\"inputbasic passwordUser\" type=\"password\"name=\"passwordUser\" minlength=\"6\"><br><br>";
					}
				}
		?>
			<input type='hidden' name='idUser' value="<?php echo $_SESSION['idUser']?>">
			<input type='hidden' name='action' value='modifier'>
			<input class="button" type="submit" name="action" value="Modifier"><br><br>
        </form>
		<form  class="formbasic"action="accueil.html" method="post">   
            <input type="submit" value="Retour">
        </form>
	</body>
</html>