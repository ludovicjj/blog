<div class="container-fuild conteneur">
    <div class="container admin">         
        
        <a href="index.php?p=admin.comments.index" class="back-admin-index">Retour à la gestion des articles</a>
        <h1 class="admin-title">Commentaires pour <?= $post->getTitle();?></h1>

        <table class="table table-hover table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">Auteur</th>
                    <th scope="col">Contenu</th>
                    <th scope="col">Action</th>
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
    </div>
</div>