
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container contact-form">
            <div class="contact-image">
                <img src="./images/pinguLogo.png" alt="rocket_contact"/>
            </div>
            <form method="post" action="index.php?uc=connexion&action=valideConnexion">
                <h3>Connexion</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input id="login" type="text" name="login" class="form-control" placeholder="Identifiant" value="" />
                        </div>
                        <div class="form-group">
                            <input id="mdp" type="password" name="mdp" class="form-control" placeholder="Mot de passe" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Connexion" />
                        </div>
                    </div>

                </div>
            </form>
</div>