<div class="container-fluid">
    <div class="row bloc-bandeau">
        <div class="bloc-bandeau-intro">
            <h1>Jahan Ludovic</h1>
            <p>Développeur web autodidacte et passionné</p>
        </div>
    </div>
</div>

<div class="container-fluid background-custom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 bloc-langage">
                <h3>Langages</h3>
                
                <div class="row">
                
                    <div class="col-lg-4 bloc-langage-intro">
                        <p>Voici les langages de programmations que je pratique le plus et que je connais le mieux. 
                        Actuellement je continue à me perfectionner...</p>
                    </div>
                    
                    <div class="col-lg-7 offset-lg-1 bloc-langage-bar">
                        <p>HTML</p>
                        <div class="progress">
                            <div class="progress-bar bar-html"></div>
                        </div>
                        
                        <p>CSS</p>
                        <div class="progress">
                            <div class="progress-bar bar-css"></div>
                        </div>
                        
                        <p>PHP</p>
                        <div class="progress">
                            <div class="progress-bar bar-php"></div>
                        </div>
                        
                        <p>Javascript</p>
                        <div class="progress">
                            <div class="progress-bar bar-js"></div>
                        </div>
                        
                        <p>SQL</p>
                        <div class="progress">
                            <div class="progress-bar bar-sql"></div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="separateur"></div>
            </div>
        </div>

        <div class="row bloc-logiciel">
            <div class="col-lg-12">
                <h3 class="bloc-logiciel-title">Logiciels</h3>
                <div class="row">
                
                    <div class="col-lg-4 col-md-6 bloc-ps">
                        <div class="logiciel logiciel-ps">
                            <img class="logo-logiciel" src="public/img/logo-ps.png"/>
                        </div>
                        <div class="logiciel-text">
                            <h5>Photoshop</h5>
                            <p>intermédiaire +</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 bloc-ai">
                        <div class="logiciel logiciel-ai">
                            <img class="logo-logiciel" src="public/img/logo-ai.png"/>
                        </div>
                        <div class="logiciel-text">
                            <h5>Illustrator</h5>
                            <p>intermédiaire -</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 bloc-id">
                        <div class="logiciel logiciel-id">
                            <img class="logo-logiciel" src="public/img/logo-id.png"/>
                        </div>
                        <div class="logiciel-text">
                            <h5>InDesign</h5>
                            <p>Confirmé</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 bloc-wp">
                        <div class="logiciel logiciel-wp">
                            <img class="logo-logiciel" src="public/img/logo-wp.png"/>
                        </div>
                        <div class="logiciel-text">
                            <h5>Wordpress</h5>
                            <p>Débutant</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 bloc-dw">
                        <div class="logiciel logiciel-dw">
                            <img class="logo-logiciel" src="public/img/logo-dw.png"/>
                        </div>
                        <div class="logiciel-text">
                            <h5>DreamWeaver</h5>
                            <p>Débutant</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 bloc-ae">
                        <div class="logiciel logiciel-ae">
                            <img class="logo-logiciel" src="public/img/logo-ae.png"/>
                        </div>
                        <div class="logiciel-text">
                            <h5>AfterEffect</h5>
                            <p>intermédiaire -</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <a name="contact"></a>
        
        <div class="row">
            <div class="col-lg-12">
                <div class="separateur"></div>
            </div>
        </div>

        <div class="row bloc-contact">
            <div class="col-lg-12">
                <h3 class="bloc-contact-title">Contact</h3>
                <div class="row">
                    <div class="col-lg-4 bloc-contact-intro">
                        <p>N'hesitez pas à me contacter en utilisant le formulaire pour avoir plus d'informations.</p>
                    </div>
                    <div class="col-lg-8">
                        <form action="#contact" method="post">
                            <div class="form-group conteneur-form">
                                <label for="nom">Nom et prenom</label>
                                <input type="text" class="form-control champs" id="nom" placeholder="Nom et prenom" name="nom">
                            </div>
                            <div class="form-group conteneur-form">
                                <label for="mail">Email</label>
                                <input type="text" class="form-control champs" id="mail" placeholder="Email" name="mail">
                            </div>
                            <div class="form-group conteneur-form">
                                <label for="message">Votre message</label>
                                <textarea class="form-control champs" id="message" placeholder="Votre message" name="message"></textarea>
                            </div>
                            <button class="btn btn-custom float-right" type="submit">Envoyer</button>
                        </form>
                        <?php
                        if ($error !== null) {
                            if ($error) {
                                echo '<span class="contact-error">'.$message.'</span>';
                            }
                        }
                        else if (isset($_GET['info'])) {
                            echo '<span class="contact-success">Votre message a été envoyé.</span>';
                        }
                        ?>
                    </div>
                    
                </div>
            </div>
        </div>
    </div><!--/container-->
</div><!--/container-fluid-->