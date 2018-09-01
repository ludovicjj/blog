<div class="container-fuild conteneur">
    <div class="container admin">         
        
        <h1 class="admin-title">membres du site</h1>

        <table class="table table-hover table-responsive-lg">
            <thead>
                <tr>
                    <th scope="col">Pseudo</th>
                    <th scope="col">mail</th>
                    <th scope="col">statut</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $users_list) : ?>
                <tr>
                    <td><?= $users_list->getUsername();?></td>
                    <td><?= $users_list->getMail();?></td>
                    <td>
                    <?php
                    if ($users_list->getStatut() == 1) {
                        echo 'Membre';
                    } else {
                        echo 'Administrateur';
                    }
                    ?>
                    </td>
                    <td>
                        <a class="btn btn-success btn-width-admin" 
                        href="index.php?p=admin.users.upper&id=<?= $users_list->getId();?>">Admin</a>
                        <a class="btn btn-danger btn-width-membre" 
                        href="index.php?p=admin.users.down&id=<?= $users_list->getId();?>">Membre</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>