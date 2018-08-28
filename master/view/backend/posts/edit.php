<form method="post" class="form-group">
	<legend>Modifier un article</legend>
	<div class="form-group">
		<label for="title">Titre</label>
		<input id="title" name="title" class="form-control" value="<?=$post->getTitle();?>"/>
	</div>
	<div class="form-group">
		<label for="intro">Introduction</label>
		<textarea id="intro" name="intro" class="form-control"><?=$post->getIntro();?></textarea>
	</div>
	<div class="form-group">
		<label for="content">Contenu</label>
		<textarea id="content" name="content" class="form-control"><?=$post->getContent();?></textarea>
	</div>
	<div class="form-group">
		<label for="author">Auteur</label>
		<input id="author" name="author" class="form-control" value="<?= $_SESSION['username'];?>"/>
	</div>
	<div class="form-group">
		<label for="image">Image</label>
		<input id="image" name="image" class="form-control" value="<?=$post->getImage();?>"/>
	</div>
	<button type="submit"class="btn btn-primary">Envoyer</button>
</form>
