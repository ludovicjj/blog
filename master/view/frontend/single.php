<div class="col-sm-12">
    <h1><?= $post->getTitle();?></h1>
    <small>Par <?= $post->getAuthor();?>, le <?= $post->getDay() .' '.$post->getMonth().' '.$post->getYear();?></small>
    <p><strong><?= $post->getIntro();?></strong></p>
    <p><?= $post->getContent();?></p>
</div>

<div class="col-sm-12">
    <legend>Commentaires</legend>
    <?php 
    if (isset($_SESSION['username'])) {
    ?>
    <form method="post" class="form-group">
        <div class="form-group">
            <label for="content">Votre message</label>
            <textarea id="content" name="content" class="form-control"></textarea>
        </div>
        <button class="btn btn-primary">Envoyer</button>
    </form>
    <?php
    } else {
        echo '<div class="alert alert-danger">Vous devez être connecté pour envoyer un commentaire</div>';
    }
    ?>
</div>