<!DOCTYPE html>
<?php
	session_start();
	include "../Modele/Modele_bdd_connect.php";
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="Style2.css">
	</head>

	<body>
        <form  class="formbasic" action="../Control/Control_compte.php" method="POST">
		<?php
			$rep = $bdd->query("SELECT * FROM user WHERE iduser =". $_SESSION['iduser']);
                while ($donnees = $rep->fetch()){
                    if (isset($donnees['pseudo']) ) { 
						echo "pseudo: <input  class=\"inputbasic pseudo\"type=\"text\"name=\"pseudo\"value=\"" . $donnees['pseudo'] . "\"minlength=\"1\"><br><br>";
						echo "mail: <input class=\"inputbasic email\" type=\"email\"name=\"email\"value=\"" . $donnees['email'] . "\"minlength=\"1\"><br><br>";
        				echo "mot de passe: <input class=\"inputbasic password\" type=\"password\"name=\"pwd\" minlength=\"6\"><br><br>";
					}
				}
		?>
			<input type='hidden' name='iduser' value="<?php echo $_SESSION['iduser']?>">
			<input type='hidden' name='action' value='modifier'>
			<input class="button" type="submit" name="action" value="Modifier"><br><br>
        </form>
		<form  class="formbasic"action="View_accueil.php" method="post">   
            <input type="submit" value="Retour">
        </form>
	</body>
</html>