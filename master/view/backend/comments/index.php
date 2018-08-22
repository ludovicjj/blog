<h1>Commentaires en attente</h1>

<table class="table">
    <thead>
        <tr>
            <td>Articles</td>
            <td>Commentaires en attentes</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
    <?php foreach($req as $data): ?>
        <tr>
            <td><?= htmlspecialchars($data['title']);?></td>
            <td><?= $data['nb_comments'];?></td>
            <td>
                <a class="btn btn-success" href="index.php?p=admin.comments.action&id=<?=$data['id'];?>">Voir plus </a>
            </td>			
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>