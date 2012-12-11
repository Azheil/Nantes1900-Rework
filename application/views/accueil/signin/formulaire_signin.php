<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >

	<?php echo validation_errors(); ?>

	<?php echo form_open('signin'); ?>

	<h5>Nom d'utilisateur:</h5>
	<input type="text" name="username" value="" size="50" />

	<h5>Choisissez un mot de passe :</h5>
	<input type="password" name="password1" value="" size="50" />

	<h5>Retapez votre mot de passe :</h5>
	<input type="password" name="password2" value="" size="50" />

	<h5>Nom :</h5>
	<input type="text" name="nom" value="" size="50" />

	<h5>Prénom :</h5>
	<input type="text" name="prenom" value="" size="50" />

	<div><input type="submit" value="Cr&eacute;er un compte" /></div>

	</form>

</html>
