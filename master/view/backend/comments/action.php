<h1>Commentaires pour <?= $post->getTitle();?></h1>

<table class="table">
    <thead>
        <tr>
            <td>Auteur</td>
            <td>Contenu</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($comments as $list) : ?>
        <tr>
            <td><?= $list->getAuthor();?></td>
            <td><?= $list->getContent();?></td>
            <td>
                <a class="btn btn-success" 
                href="index.php?p=admin.comments.update&id=<?= $list->getId();?>&post_id=<?= $list->getPostId();?>">
                Valider
                </a>
                <a class="btn btn-danger" 
                href="index.php?p=admin.comments.delete&id=<?= $list->getId();?>&post_id=<?= $list->getPostId();?>">
                Supprimer
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<a class="btn btn-primary" href="index.php?p=admin.comments.index">Retour à l'index des commentaires</a>