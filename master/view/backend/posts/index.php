 <div class="container-fuild conteneur">
    <div class="container admin">
        <div class="col-sm-12">
            <h1 class="admin-title">Gestions des articles</h1>

            <h3 class="admin-sub-title">Ajouter un article :</h3>

            <a class="btn btn-success" href="index.php?p=admin.posts.add">Ajouter</a>

            <h3 class="admin-sub-title">Liste des articles</h3>
            <table class="table table-hover table-responsive-sm ">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Titre</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($posts as $posts_list) : ?>
                <tr>
                    <td><?= $posts_list->getId(); ?></td>
                    <td><?= $posts_list->getTitle(); ?></td>
                    <td>
                        <a href="index.php?p=admin.posts.edit&id=<?= $posts_list->getId(); ?>"
                        class="btn btn-success btn-width-success">Modifier</a>
                        <form action="index.php?p=admin.posts.delete" style="display:inline;" method="post">
                            <input type="hidden" name="id" value="<?= $posts_list->getId();?>">
                            <button type="submit" class="btn btn-danger btn-width">Supprimer</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>