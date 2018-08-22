<div class="col-sm-12">
    <h1><?= $post->getTitle();?></h1>
    <small>Par <?= $post->getAuthor();?>, le <?= $post->getDay() .' '.$post->getMonth().' '.$post->getYear();?></small>
    <p><strong><?= $post->getIntro();?></strong></p>
    <p><?= $post->getContent();?></p>
</div>

<div class="col-sm-12">
    <legend>Commentaires</legend>
    <table class="table">
    <?php foreach ($comments as $comments_list): ?>
    <tr>
        <td><?= $comments_list->getAuthor() ;?></td>
        <td>
            <p><?= $comments_list->getContent(); ?><p>
            <small>Le <?= $comments_list->getDay() .' '. $comments_list->getMonth() .' '. $comments_list->getYear() . ' ' . $comments_list->getHour();?><small>
        </td>
    </tr>
    <?php endforeach; ?>
    </table>
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
	    if (isset($error)) {
	        if ($error) {
	            echo '<div class="alert alert-danger">'.$message.'</div>';
	        }
	    }
	    elseif (isset($_GET['info'])) {
	        echo '<div class="alert alert-success">Votre commentaire a été envoyé et sera publié après validation par l\'administration</div>';
	    }
    } else {
        echo '<div class="alert alert-danger">Vous devez être connecté pour envoyer un commentaire</div>';
    }
    ?>
</div>