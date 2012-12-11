<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >

	<?php echo validation_errors(); ?>

	<?php echo form_open('login'); ?>

	<h5>Nom d'utilisateur:</h5>
	<input type="text" name="username" value="" size="50" />

	<h5>Mot de passe :</h5>
	<input type="password" name="password" value="" size="50" />

	<div><input type="submit" value="Connexion" /></div>

	</form>

	<p><?php echo anchor('accueil/signin', 'Nouveau sur le site ? Cliquez-ici pour vous inscrire'); ?></p>

</html>
