
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="public/css/lux.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="public/css/custom.css" rel="stylesheet">

    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php?p=index">
                <img src="public/img/logo-nb.png"/>
            </a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03"
            aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarColor03">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php?p=index">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=posts">Articles</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php?p=register">Inscription</a>
                    </li>
                    <?php if (isset($_SESSION['statut']) && $_SESSION['statut'] == 2) :?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">Administration</a>
                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; 
                        will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);">
                            <a class="dropdown-item" href="index.php?p=admin.posts.index">Articles</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="index.php?p=admin.comments.index">Commentaires</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="index.php?p=admin.users.index">Membres</a>
                        </div>
                    </li>
                    <?php endif; ?>
                </ul>
                <?php
                if (isset($_SESSION['username'])) {
                    echo '<a class="btn btn-secondary my-2 my-sm-0 btn-connexion" href="index.php?p=logout">Deconnexion</a>';
                } else {
                    echo '<a class="btn btn-secondary my-2 my-sm-0 btn-connexion" href="index.php?p=login">Connexion</a>';
                }
                ?>
            </div>
        </div>
    </nav>

    <div class="container">

      <div class="starter-template" style="padding-top: 70px;">
        <?= $content; ?>
      </div>

    </div><!-- /.container -->


    <!-- JS
    ================================================== -->
	<script src="public/js/jquery.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
	
  </body>
</html>
