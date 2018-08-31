<div class="col-sm-8">
    <form class="form-group login-form" method="post">
        <legend>formulaire de connexion</legend>
        <label for="username">Pseudo : </label>
        <input id="username" type="text" class="form-control" name="username">
		
        <label for="password">Mot de passe : </label>
        <input id="password" type="password" class="form-control" name="password">
		
        <br>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
	
<?php
if ($error !== null) {
    if ($error) {
        echo '<div class="alert alert-danger">'. $message .'</div>';
    } else {
        echo '<div class="alert alert-success">'. $message .'</div>';
    }
}
?>
</div>