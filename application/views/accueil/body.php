<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" > 
<body>

	<h1> Bienvenue sur le site </h1>
	
	<section1>Le site est actuellement en d&eacute;veloppement</section1>

	<?php echo validation_errors(); ?>

	<?php echo form_open('login'); ?>

	<h5>Pseudo:</h5>
	<input type="text" name="username" value="" size="50" />

	<h5>Mot de passe :</h5>
	<input type="text" name="password" value="" size="50" />

	<div><input type="submit" value="Connexion" /></div>

	</form>


</body>
</html>
