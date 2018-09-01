<div class="container-fuild conteneur">
    <div class="container admin">          
        
        <h1 class="admin-title">Commentaires en attente</h1>

        <table class="table table-hover table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">Articles</th>
                    <th scope="col">Commentaires en attentes</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($req as $data) : ?>
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
    </div>
</div>