<form method="post" class="form-group">
	<legend>Ajouter un article</legend>
	<div class="form-group">
		<label for="title">Titre</label>
		<input id="title" name="title" class="form-control"/>
	</div>
	<div class="form-group">
		<label for="intro">Introduction</label>
		<textarea id="intro" name="intro" class="form-control"></textarea>
	</div>
	<div class="form-group">
		<label for="content">Contenu</label>
		<textarea id="content" name="content" class="form-control"></textarea>
	</div>
	<div class="form-group">
		<label for="author">Auteur</label>
		<input id="author" name="author" class="form-control" value="<?= $_SESSION['username'];?>"/>
	</div>
	<div class="form-group">
		<label for="image">Image</label>
		<input id="image" name="image" class="form-control"/>
	</div>
	<button type="submit"class="btn btn-primary">Envoyer</button>
</form>

<?php
if (isset($error) && $error === true) {
    echo '<div class="alert alert-danger">'.$message.'</div>';
}
?>
