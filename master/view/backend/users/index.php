<h1>Liste des membres du site</h1>

<table class="table">
    <thead>
        <tr>
            <td>Pseudo</td>
            <td>mail</td>
            <td>statut</td>
            <td>action</td>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $users_list): ?>
        <tr>
            <td><?= $users_list->getUsername();?></td>
            <td><?= $users_list->getMail();?></td>
            <td>
            <?php
            $statut = ($users_list->getStatut() == 1) ? '<strong>Membre</strong>' : '<strong>Administrateur</strong>';
            echo $statut;
            ?>
            </td>
            <td>
                <a class="btn btn-success" href="index.php?p=admin.users.upper&id=<?= $users_list->getId();?>">Admin</a>
                <a class="btn btn-danger" href="index.php?p=admin.users.down&id=<?= $users_list->getId();?>">Membre</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>