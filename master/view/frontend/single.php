<div class="container-fuild conteneur">
    <div class="container bloc-single">        
        
        <div class="col-sm-12">
            <div class="single-image">
                <img src="<?= $post->getImage();?>"/>
            </div>
            <h1><?= $post->getTitle();?></h1>
            <small>Par <?= $post->getAuthor();?>, le <?= $post->getDay() .' '.$post->getMonth().' '.$post->getYear();?></small>
            <p class="single-intro"><?= $post->getIntro();?></p>
            <p><?= $post->getContent();?></p>
        </div>

        <div class="col-sm-12">
            <legend>Commentaires</legend>
            <table class="table">
            <?php foreach ($comments as $comments_list) : ?>
            <tr>
                <td class="author"><img src="public/img/logo-user.png" alt="logo-user"/><?= $comments_list->getAuthor() ;?></td>
                <td>
                    <small>
                        Le <?= $comments_list->getDay() .
                        ' '. $comments_list->getMonth() .
                        ' '. $comments_list->getYear() .
                        ' à ' . $comments_list->getHour();?>
                    </small>
                    <p><?= $comments_list->getContent(); ?><p>
                </td>
            </tr>
            <?php endforeach; ?>
            </table>
            
            <?php
            if (isset($_SESSION['username'])) {
            ?>
            <form method="post" class="form-group">
                <div class="form-group conteneur-form">
                    <label for="content">Votre message</label>
                    <textarea id="content" name="content" class="form-control champs"></textarea>
                </div>
                <button class="btn btn-custom">Envoyer</button>
            </form>
            <?php
            if (isset($error)) {
                if ($error) {
                    echo '<div class="alert alert-danger">'.$message.'</div>';
                }
            } elseif (isset($_GET['info'])) {
                echo '<div class="alert alert-success">';
                echo 'Votre commentaire a été envoyé et sera publié après validation par l\'administration';
                echo '</div>';
            }
            } else {
                echo '<div class="alert alert-danger">Vous devez être connecté pour envoyer un commentaire</div>';
            }
            ?>
        </div>
    </div>
</div>