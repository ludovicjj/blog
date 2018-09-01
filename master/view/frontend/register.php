<div class="container-fluid conteneur">
    <div class="container">
        <div class="col-sm-8 bloc-register">
            <form class="form-group" method="post">
                <legend>Inscription</legend>
                
                <div class="form-group conteneur-form">
                    <label for="username">Pseudo : </label>
                    <input id="username" type="text" class="form-control champs" name="username" placeholder="Pseudo">
                </div>
                
                <div class="form-group conteneur-form">
                    <label for="password">Mot de passe : </label>
                    <input id="password" type="password" class="form-control champs" name="password" placeholder="Mot de passe">
                </div>
                
                <div class="form-group conteneur-form">
                    <label for="mail">Mail : </label>
                    <input id="mail" type="text" class="form-control champs" name="mail" placeholder="Email">
                </div>
                
                <button class="btn btn-custom">Envoyer</button>
            </form>
            
        <?php
        if ($error !== null) {
            if ($error) {
                echo '<div class="alert alert-danger">'. $message .'</div>';
            } else {
                echo '<div class="alert alert-success">'. $message .'</div>';
            }
        }
        ?>
        </div>
    </div>
</div>