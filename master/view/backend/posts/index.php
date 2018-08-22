<h1>Administration des articles</h1>

<h2>Ajouter un article</h2>

<a class="btn btn-primary" href="index.php?p=admin.posts.add">Ajouter</a>

<h2>Liste des articles</h2>
<table class="table">
    <thead>
        <tr>
            <td>Id</td>
            <td>Titre</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($posts as $posts_list): ?>
    <tr>
        <td><?= $posts_list->getId(); ?></td>
        <td><?= $posts_list->getTitle(); ?></td>
        <td>
            <a href="index.php?p=admin.posts.edit&id=<?= $posts_list->getId(); ?>" class="btn btn-primary">Modifier</a>
            <form action="index.php?p=admin.posts.delete" style="display:inline;" method="post">
                <input type="hidden" name="id" value="<?= $posts_list->getId();?>">
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>